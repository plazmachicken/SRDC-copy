<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\UtilInfo;
use App\Notifications\EditFormNotification;
use App\Notifications\NewFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class Utilcontroller extends Controller
{
    //

    public function saveItemUtil(Request $request)
    {
        $newutilinfo = new UtilInfo;
        $newutilinfo->formType = 6;
        $newutilinfo->inventiontitle = $request->inventiontitle;
        $newutilinfo->name = $request->name;
        $newutilinfo->applicantid = $request->applicantid;
        $newutilinfo->applicantaddress = $request->applicantaddress;
        $newutilinfo->applicantnationality = $request->applicantnationality;
        $newutilinfo->telno = $request->telno;
        $newutilinfo->faxno = $request->faxno;
        if ($request->has('innovator_status')) {
            $newutilinfo->innovator_status = $request->innovator_status;
        }
        $newutilinfo->innovator_name = $request->innovator_name;
        $newutilinfo->innovator_address = $request->innovator_address;
        if ($request->has('divisional')) {
            $newutilinfo->divisional = $request->divisional;
        }
        $newutilinfo->filingdate = $request->filingdate;
        $newutilinfo->prioritydate = $request->prioritydate;
        $newutilinfo->initialapplication = $request->initialapplication;
        $newutilinfo->initialfiling = $request->initialfiling;
        $newutilinfo->claimcountry = $request->claimcountry;
        $newutilinfo->filingclaim = $request->filingclaim;
        $newutilinfo->claimapplication = $request->claimapplication;
        if ($request->has('patentsymbol')) {
            $newutilinfo->patentsymbol = $request->patentsymbol;
        }
        $newutilinfo->earlyapplication = $request->earlyapplication;

        $newutilinfo->is_complete = "Pending";
        $newutilinfo->user_id = auth()->user()->id;
        $newutilinfo->save();
        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();

        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new NewFormNotification($newutilinfo));
        }

        Log::info(json_encode($request->all()));
        return view('thankyou');
    }

    public function Update(Request $request, $formType, $id)
    {
        // dd( $formType);
        $newutilinfo = UtilInfo::findOrFail($id);

        $newutilinfo->formType = 6;
        $newutilinfo->inventiontitle = $request->inventiontitle;
        $newutilinfo->name = $request->name;
        $newutilinfo->applicantid = $request->applicantid;
        $newutilinfo->applicantaddress = $request->applicantaddress;
        $newutilinfo->applicantnationality = $request->applicantnationality;
        $newutilinfo->telno = $request->telno;
        $newutilinfo->faxno = $request->faxno;
        if ($request->has('innovator_status')) {
            $newutilinfo->innovator_status = $request->innovator_status;
        }
        $newutilinfo->innovator_name = $request->innovator_name;
        $newutilinfo->innovator_address = $request->innovator_address;
        if ($request->has('divisional')) {
            $newutilinfo->divisional = $request->divisional;
        }
        $newutilinfo->filingdate = $request->filingdate;
        $newutilinfo->prioritydate = $request->prioritydate;
        $newutilinfo->initialapplication = $request->initialapplication;
        $newutilinfo->initialfiling = $request->initialfiling;
        $newutilinfo->claimcountry = $request->claimcountry;
        $newutilinfo->filingclaim = $request->filingclaim;
        $newutilinfo->claimapplication = $request->claimapplication;
        if ($request->has('patentsymbol')) {
            $newutilinfo->patentsymbol = $request->patentsymbol;
        }
        $newutilinfo->earlyapplication = $request->earlyapplication;

        $newutilinfo->save();
        // dd('yes');
        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();
        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new EditFormNotification($newutilinfo));
        }
        return redirect()->route('custdash',);
    }
}

