<?php

namespace App\Http\Controllers;

use App\Models\geoinfo;
use App\Models\User;
use App\Notifications\EditFormNotification;
use App\Notifications\NewFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GeoController extends Controller
{
    public function saveItem(Request $request)
    {
        $newgeoinfo = new geoinfo;
        $newgeoinfo->formType = 1;
        $newgeoinfo->inventiontitle = $request->inventiontitle;
        $newgeoinfo->name = $request->name;
        $newgeoinfo->applicanttype = $request->applicanttype;
        $newgeoinfo->nationality = $request->nationality;
        $newgeoinfo->postcode = $request->postcode;
        $newgeoinfo->town = $request->town;
        $newgeoinfo->state = $request->state;
        $newgeoinfo->telephone = $request->telephone;
        $newgeoinfo->email = $request->email;
        $newgeoinfo->website = $request->website;
        $newgeoinfo->postcodeservice = $request->postcodeservice;
        $newgeoinfo->townservice = $request->townservice;
        $newgeoinfo->stateservice = $request->stateservice;
        $newgeoinfo->representation = $request->representation;
        $newgeoinfo->earlygi = $request->earlygi;
        $newgeoinfo->emailgi = $request->emailgi;

        if ($request->has('non_national')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->non_national = implode(', ', $request->non_national);
        }

        if ($request->has('trade_type')) {
            // Convert array to comma-separated string and store in the database
            $newinfo->trade_type = implode(', ', $request->trade_type);
        }


        if ($request->has('non_roman')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->non_roman = implode(', ', $request->non_roman);
        }

        $newgeoinfo->character = $request->character;
        $newgeoinfo->transliteration = $request->transliteration;
        $newgeoinfo->translation = $request->translation;

        if ($request->has('non_national')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->non_national = implode(', ', $request->non_national);
        }

        $newgeoinfo->language = $request->language;
        $newgeoinfo->translation_national = $request->translation_national;
        $newgeoinfo->class = $request->class;
        $newgeoinfo->listofgoods = $request->listofgoods;
        $newgeoinfo->goods_description = $request->goods_description;
        $newgeoinfo->date_of_protection = $request->date_of_protection;

        if ($request->hasFile('supporting_documents1')) {
            $request->validate(
               [ 'supporting_documents1' => 'required|file|mimes:pdf|max:8048']
            );
            $file = $request->file('supporting_documents1');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/supporting_documents1'), $filename);
            $newgeoinfo->supporting_documents1 = $filename; // Store filename in database
        }

        if ($request->hasFile('area_picture')) {
            $request->validate(
                [ 'area_picture' => 'required|mimes:jpeg,png,PNJ,jpg,JPG,gif|max:8048']
             );
            $file = $request->file('area_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/area_picture'), $filename);
            $newgeoinfo->area_picture = $filename; // Store filename in database
        }

        $newgeoinfo->colour = $request->colour;
        $newgeoinfo->shape = $request->shape;
        $newgeoinfo->texture = $request->texture;
        $newgeoinfo->size = $request->size;
        $newgeoinfo->weight = $request->weight;
        $newgeoinfo->taste = $request->taste;
        $newgeoinfo->proof_of_origin = $request->proof_of_origin;
        $newgeoinfo->causal_link = $request->causal_link;
        $newgeoinfo->processing_techniques = $request->processing_techniques;
        $newgeoinfo->labelling_description = $request->labelling_description;
        $newgeoinfo->award_recognition = $request->award_recognition;
        $newgeoinfo->inspection_body = $request->inspection_body;

        if ($request->has('association')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->association = implode(', ', $request->association);
        }

        if ($request->has('competent_authority')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->competent_authority = implode(', ', $request->competent_authority);
        }

        if ($request->hasFile('supporting_documents')) {
            $request->validate(
                [ 'supporting_documents' => 'required|file|mimes:pdf|max:8048']
             );
            $file = $request->file('supporting_documents');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/supporting_documents'), $filename);
            $newgeoinfo->supporting_documents = $filename; // Store filename in database
        }

        $newgeoinfo->is_complete = "Pending";
        $newgeoinfo->user_id = auth()->user()->id;
        $newgeoinfo->save();

        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();

        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new NewFormNotification($newgeoinfo));
        }

        Log::info(json_encode($request->all()));
        return view('thankyou');
    }

    public function Update(Request $request, $formType, $id)
    {
        $newgeoinfo = geoinfo::findOrFail($id);
        $newgeoinfo->formType = 1;
        $newgeoinfo->inventiontitle = $request->inventiontitle;
        $newgeoinfo->name = $request->name;
        $newgeoinfo->applicanttype = $request->applicanttype;
        $newgeoinfo->nationality = $request->nationality;
        $newgeoinfo->postcode = $request->postcode;
        $newgeoinfo->town = $request->town;
        $newgeoinfo->state = $request->state;
        $newgeoinfo->telephone = $request->telephone;
        $newgeoinfo->email = $request->email;
        $newgeoinfo->website = $request->website;
        $newgeoinfo->postcodeservice = $request->postcodeservice;
        $newgeoinfo->townservice = $request->townservice;
        $newgeoinfo->stateservice = $request->stateservice;
        $newgeoinfo->representation = $request->representation;
        $newgeoinfo->earlygi = $request->earlygi;
        $newgeoinfo->emailgi = $request->emailgi;

        if ($request->has('non_national')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->non_national = implode(', ', $request->non_national);
        }

        if ($request->has('trade_type')) {
            // Convert array to comma-separated string and store in the database
            $newinfo->trade_type = implode(', ', $request->trade_type);
        }


        if ($request->has('non_roman')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->non_roman = implode(', ', $request->non_roman);
        }

        $newgeoinfo->character = $request->character;
        $newgeoinfo->transliteration = $request->transliteration;
        $newgeoinfo->translation = $request->translation;

        if ($request->has('non_national')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->non_national = implode(', ', $request->non_national);
        }

        $newgeoinfo->language = $request->language;
        $newgeoinfo->translation_national = $request->translation_national;
        $newgeoinfo->class = $request->class;
        $newgeoinfo->listofgoods = $request->listofgoods;
        $newgeoinfo->goods_description = $request->goods_description;
        $newgeoinfo->date_of_protection = $request->date_of_protection;

        if ($request->hasFile('supporting_documents1')) {
            $file = $request->file('supporting_documents1');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/supporting_documents1'), $filename);
            $newgeoinfo->supporting_documents1 = $filename; // Store filename in database
        }

        if ($request->hasFile('area_picture')) {
            $file = $request->file('area_picture');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/area_picture'), $filename);
            $newgeoinfo->area_picture = $filename; // Store filename in database
        }

        $newgeoinfo->colour = $request->colour;
        $newgeoinfo->shape = $request->shape;
        $newgeoinfo->texture = $request->texture;
        $newgeoinfo->size = $request->size;
        $newgeoinfo->weight = $request->weight;
        $newgeoinfo->taste = $request->taste;
        $newgeoinfo->proof_of_origin = $request->proof_of_origin;
        $newgeoinfo->causal_link = $request->causal_link;
        $newgeoinfo->processing_techniques = $request->processing_techniques;
        $newgeoinfo->labelling_description = $request->labelling_description;
        $newgeoinfo->award_recognition = $request->award_recognition;
        $newgeoinfo->inspection_body = $request->inspection_body;

        if ($request->has('association')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->association = implode(', ', $request->association);
        }

        if ($request->has('competent_authority')) {
            // Convert array to comma-separated string and store in the database
            $newgeoinfo->competent_authority = implode(', ', $request->competent_authority);
        }

        if ($request->hasFile('supporting_documents')) {
            $file = $request->file('supporting_documents');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/supporting_documents'), $filename);
            $newgeoinfo->supporting_documents = $filename; // Store filename in database
        }

        $newgeoinfo->is_complete = "Pending";
        $newgeoinfo->user_id = auth()->user()->id;
        $newgeoinfo->save();

         // dd('yes');
        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();
        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new EditFormNotification($newgeoinfo));
        }
        return redirect()->route('custdash',);
    }

    public function download($fromId, $type)
    {
        // Retrieve the user from the database
        $form = geoinfo::findOrFail($fromId);


        if ($type == 'supporting_documents') {
            /// Extract the file name from the user's data
            $filename = $form->supporting_documents;

            // Generate the file path
            $filePath = public_path('files/supporting_documents/' . $filename);
        } elseif ($type == 'supporting_documents1') {
            // Extract the file name from the user's data
            $filename = $form->supporting_documents1;
            // Generate the file path
            $filePath = public_path('files/supporting_documents1/' . $filename);
        } elseif ($type == 'area_picture') {
            // Extract the file name from the user's data
            $filename = $form->area_picture;
            // Generate the file path
            $filePath = public_path('files/area_picture/' . $filename);
        }

        // Check if the file exists
        if (file_exists($filePath)) {
            // Download the file
            return response()->download($filePath);
        } else {
            // File not found, redirect back with an error message
            return back()->with('error', 'File not found.');
        }
    }

}
