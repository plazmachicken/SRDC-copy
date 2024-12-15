<?php

namespace App\Http\Controllers;



use App\Models\Indust;
use App\Models\User;
use App\Notifications\EditFormNotification;
use App\Notifications\NewFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class Industcontroller extends Controller
{
    //

    public function saveItemIndust(Request $request)
    {
        $newinfo = new Indust;
        $newinfo->formType = 4;
        $newinfo->inventiontitle = $request->inventiontitle;
        $newinfo->name = $request->name;
        $newinfo->author = $request->author;
        $newinfo->agent_name = $request->agent_name;
        $newinfo->article = $request->article;
        $newinfo->classification = $request->classification;
        $newinfo->view = $request->view;
        $newinfo->multi = $request->multi;
        $newinfo->association = $request->association;
        $newinfo->prioCountry = $request->prioCountry;
        $newinfo->prioNo = $request->prioNo;
        $newinfo->prioDate = $request->prioDate;
        $newinfo->ten = $request->ten;
        $newinfo->divNo = $request->divNo;
        $newinfo->divDate = $request->divDate;
        $newinfo->malay = $request->malay;

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
        $newinfo = Indust::findOrFail($id);

        $newinfo->inventiontitle = $request->inventiontitle;
        $newinfo->name = $request->name;
        $newinfo->author = $request->author;
        $newinfo->agent_name = $request->agent_name;
        $newinfo->article = $request->article;
        $newinfo->classification = $request->classification;
        $newinfo->view = $request->view;
        $newinfo->multi = $request->multi;
        $newinfo->association = $request->association;
        $newinfo->prioCountry = $request->prioCountry;
        $newinfo->prioNo = $request->prioNo;
        $newinfo->prioDate = $request->prioDate;
        $newinfo->ten = $request->ten;
        $newinfo->divNo = $request->divNo;
        $newinfo->divDate = $request->divDate;
        $newinfo->malay = $request->malay;

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
}

