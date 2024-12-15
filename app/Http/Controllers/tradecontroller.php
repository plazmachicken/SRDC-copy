<?php

namespace App\Http\Controllers;

use App\Models\info;
use App\Models\User;
use App\Notifications\EditFormNotification;
use App\Notifications\NewFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class tradecontroller extends Controller
{
    public function saveItemtrade(Request $request)
    {
        $newinfo = new info;
        $newinfo->formType = 2;
        $newinfo->inventiontitle = $request->inventiontitle;
        $newinfo->name = $request->name;
        $newinfo->applicant_type = $request->applicant_type;
        $newinfo->business_registration = $request->business_registration;
        $newinfo->business_address = $request->business_address;
        $newinfo->phone_num = $request->phone_num;
        $newinfo->reference = $request->reference;
        if ($request->has('trade_type')) {
            // Convert array to comma-separated string and store in the database
            $newinfo->trade_type = implode(', ', $request->trade_type);
        }
        $newinfo->word = $request->word;
        $newinfo->device = $request->device;
        $newinfo->word_device = $request->word_device;
        $newinfo->shape = $request->shape;
        $newinfo->styleword = $request->styleword;
        $newinfo->color = $request->color;
        $newinfo->sound = $request->sound;
        $newinfo->scent = $request->scent;
        $newinfo->hologram = $request->hologram;
        $newinfo->positioning = $request->positioning;
        $newinfo->motion = $request->motion;
        $newinfo->combination = $request->combination;
        $newinfo->description = $request->description;
        // Check if radio button value is provided
        if ($request->has('trademark_color')) {
            $newinfo->trademark_color = $request->trademark_color;
        }

        // Check if color description is provided for colored representation
        if ($request->has('colorDescription')) {
            $newinfo->color_description = $request->colorDescription;
        }

        if ($request->hasFile('graphic')) {
            $file = $request->file('graphic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/graphics'), $filename);
            $newinfo->graphic = $filename; // Store filename in database
        }



        $newinfo->disclaimer = $request->disclaimer;
        $newinfo->firstuse = $request->firstuse;

        if ($request->hasFile('additionalDocs')) {
            $file = $request->file('additionalDocs');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/additionalDocs'), $filename);
            $newinfo->additionalDocs = $filename; // Store filename in database
        }

        $newinfo->is_complete = "Pending";
        $newinfo->user_id = auth()->user()->id;
        $newinfo->save();

        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();

        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new NewFormNotification($newinfo));
        }
        Log::info(json_encode($request->all()));
        return view('thankyou');
    }

    public function Update(Request $request, $formType, $id)
    {
        // dd('yes');
        $newinfo = info::findOrFail($id);
        $newinfo->formType = 2;
        $newinfo->inventiontitle = $request->inventiontitle;
        $newinfo->name = $request->name;
        $newinfo->applicant_type = $request->applicant_type;
        $newinfo->business_registration = $request->business_registration;
        $newinfo->business_address = $request->business_address;
        $newinfo->phone_num = $request->phone_num;
        $newinfo->reference = $request->reference;
        if ($request->has('trade_type')) {
            // Convert array to comma-separated string and store in the database
            $newinfo->trade_type = implode(', ', $request->trade_type);
        }
        $newinfo->word = $request->word;
        $newinfo->device = $request->device;
        $newinfo->word_device = $request->word_device;
        $newinfo->shape = $request->shape;
        $newinfo->styleword = $request->styleword;
        $newinfo->color = $request->color;
        $newinfo->sound = $request->sound;
        $newinfo->scent = $request->scent;
        $newinfo->hologram = $request->hologram;
        $newinfo->positioning = $request->positioning;
        $newinfo->motion = $request->motion;
        $newinfo->combination = $request->combination;
        $newinfo->description = $request->description;
        // Check if radio button value is provided
        if ($request->has('trademark_color')) {
            $newinfo->trademark_color = $request->trademark_color;
        }

        // Check if color description is provided for colored representation
        if ($request->has('colorDescription')) {
            $newinfo->color_description = $request->colorDescription;
        }

        if ($request->hasFile('graphic')) {
            $request->validate(
                [ 'graphic' => 'required|mimes:jpeg,png,PNJ,jpg,JPG,gif|max:8048']
             );
            $file = $request->file('graphic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/graphics'), $filename);
            $newinfo->graphic = $filename; // Store filename in database
        }



        $newinfo->disclaimer = $request->disclaimer;
        $newinfo->firstuse = $request->firstuse;

        if ($request->hasFile('additionalDocs')) {
            $request->validate(
                [ 'additionalDocs' => 'required|file|mimes:pdf|max:8048']
             );
            $file = $request->file('additionalDocs');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files/additionalDocs'), $filename);
            $newinfo->additionalDocs = $filename; // Store filename in database
        }
        $newinfo->save();
        // dd('yes');
        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();
        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new EditFormNotification($newinfo));
        }
        return redirect()->route('custdash',);


    }

    public function download($fromId, $type)
    {
        // Retrieve the user from the database
        $form = info::findOrFail($fromId);


        if ($type == 'additionalDocs') {
            /// Extract the file name from the user's data
            $filename = $form->additionalDocs;

            // Generate the file path
            $filePath = public_path('files/additionalDocs/' . $filename);
        } elseif ($type == 'graphics') {
            // Extract the file name from the user's data
            $filename = $form->graphic;
            // Generate the file path
            $filePath = public_path('files/graphics/' . $filename);
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

