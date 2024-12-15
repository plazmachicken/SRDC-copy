<?php

namespace App\Http\Controllers;


use App\Models\Patinfo;
use App\Models\User;
use App\Notifications\EditFormNotification;
use App\Notifications\NewFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class Patcontroller extends Controller
{
    //

    public function saveItemPatent(Request $request)
    {
        $newpatinfo = new Patinfo;
        $newpatinfo->formType = 5;
        $newpatinfo->inventiontitle = $request->inventiontitle;
        $newpatinfo->name = $request->name;
        $newpatinfo->applicantid = $request->applicantid;
        $newpatinfo->applicantaddress = $request->applicantaddress;
        $newpatinfo->applicantnationality = $request->applicantnationality;
        $newpatinfo->telno = $request->telno;
        $newpatinfo->faxno = $request->faxno;
        if ($request->has('innovator_status')) {
            $newpatinfo->innovator_status = $request->innovator_status;
        }
        $newpatinfo->innovator_name = $request->innovator_name;
        $newpatinfo->innovator_address = $request->innovator_address;
        if ($request->has('divisional')) {
            $newpatinfo->divisional = $request->divisional;
        }
        $newpatinfo->filingdate = $request->filingdate;
        $newpatinfo->prioritydate = $request->prioritydate;
        $newpatinfo->initialapplication = $request->initialapplication;
        $newpatinfo->initialfiling = $request->initialfiling;
        $newpatinfo->claimcountry = $request->claimcountry;
        $newpatinfo->filingclaim = $request->filingclaim;
        $newpatinfo->claimapplication = $request->claimapplication;
        if ($request->has('patentsymbol')) {
            $newpatinfo->patentsymbol = $request->patentsymbol;
        }
        $newpatinfo->earlyapplication = $request->earlyapplication;

        $newpatinfo->is_complete = "Pending";
        $newpatinfo->user_id = auth()->user()->id;
        $newpatinfo->save();

        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();

        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new NewFormNotification($newpatinfo));
        }


        Log::info(json_encode($request->all()));
        return view('thankyou');
    }

    public function Update(Request $request, $formType, $id)
    {
        $newpatinfo = Patinfo::findOrFail($id);
        $newpatinfo->inventiontitle = $request->inventiontitle;
        $newpatinfo->name = $request->name;
        $newpatinfo->applicantid = $request->applicantid;
        $newpatinfo->applicantaddress = $request->applicantaddress;
        $newpatinfo->applicantnationality = $request->applicantnationality;
        $newpatinfo->telno = $request->telno;
        $newpatinfo->faxno = $request->faxno;
        if ($request->has('innovator_status')) {
            $newpatinfo->innovator_status = $request->innovator_status;
        }
        $newpatinfo->innovator_name = $request->innovator_name;
        $newpatinfo->innovator_address = $request->innovator_address;
        if ($request->has('divisional')) {
            $newpatinfo->divisional = $request->divisional;
        }
        $newpatinfo->filingdate = $request->filingdate;
        $newpatinfo->prioritydate = $request->prioritydate;
        $newpatinfo->initialapplication = $request->initialapplication;
        $newpatinfo->initialfiling = $request->initialfiling;
        $newpatinfo->claimcountry = $request->claimcountry;
        $newpatinfo->filingclaim = $request->filingclaim;
        $newpatinfo->claimapplication = $request->claimapplication;
        if ($request->has('patentsymbol')) {
            $newpatinfo->patentsymbol = $request->patentsymbol;
        }
        $newpatinfo->earlyapplication = $request->earlyapplication;


        $newpatinfo->save();
        // dd('yes');
        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();
        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new EditFormNotification($newpatinfo));
        }
        return redirect()->route('custdash', );
    }
}

