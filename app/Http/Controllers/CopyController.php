<?php

namespace App\Http\Controllers;

use App\Models\copyinfo;
use App\Models\User;
use App\Notifications\EditFormNotification;
use App\Notifications\NewFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CopyController extends Controller
{
    //

    public function saveItemCopy(Request $request) {

        $newcopyinfo = new copyinfo;
        $newcopyinfo->formType=3;
        $newcopyinfo->inventiontitle = $request->inventiontitle;
        $newcopyinfo->worktitle = $request->worktitle;
        $newcopyinfo->worktranslation = $request->worktranslation;
        $newcopyinfo->worktransliteration = $request->worktransliteration;
        $newcopyinfo->worklanguage = $request->worklanguage;

        if ($request->has('copyrightwork')) {
            // Convert array to comma-separated string and store in the database
            $newcopyinfo->copyrightwork = implode(', ', $request->copyrightwork);
        }

        if ($request->has('derivativework')) {
            // Convert array to comma-separated string and store in the database
            $newcopyinfo->derivativework = implode(', ', $request->derivativework);
        }

        $newcopyinfo->datecreate = $request->datecreate;

        if ($request->has('publication_status')) {
            $newcopyinfo->publication_status = $request->publication_status;

        }

        $newcopyinfo->year_compilation = $request->year_compilation;
        $newcopyinfo->date_first_publication = $request->date_first_publication;
        $newcopyinfo->country_publication = $request->country_publication;


        $newcopyinfo->authorname = $request->authorname;
        $newcopyinfo->authorid= $request->authorid;
        $newcopyinfo->authornationality = $request->authornationality;
        $newcopyinfo->authoraddress= $request->authoraddress;
        $newcopyinfo->authorpostcode = $request->authorpostcode;
        $newcopyinfo->authorcity= $request->authorcity;
        $newcopyinfo->authorstate = $request->authorstate;
        $newcopyinfo->authorcountry = $request->authorcountry;
        $newcopyinfo->authoremail = $request->authoremail;
        $newcopyinfo->telno = $request->telno;
        $newcopyinfo->faxno = $request->faxno;
        $newcopyinfo->ownername = $request->ownername;
        $newcopyinfo->ownerid = $request->ownerid;
        $newcopyinfo->companyname = $request->companyname;
        $newcopyinfo->companyno = $request->companyno;
        $newcopyinfo->owneradd = $request->owneradd;
        $newcopyinfo->ownerpostcode = $request->ownerpostcode;
        $newcopyinfo->ownercity = $request->ownercity;
        $newcopyinfo->ownernationality = $request->ownernationality;
        $newcopyinfo->ownerstate = $request->ownerstate;
        $newcopyinfo->ownercountry = $request->ownercountry;
        $newcopyinfo->ownertelno = $request->ownertelno;
        $newcopyinfo->owneremail = $request->owneremail;
        $newcopyinfo->ownerfaxno = $request->ownerfaxno;
        $newcopyinfo->licenseename = $request->licenseename;
        $newcopyinfo->licenseeid = $request->licenseeid;
        $newcopyinfo->licenseecompanyname = $request->licenseecompanyname;
        $newcopyinfo->licenseecompno = $request->licenseecompno;
        $newcopyinfo->licenseeadd = $request->licenseeadd;
        $newcopyinfo->licenseepostcode = $request->licenseepostcode;
        $newcopyinfo->licenseecity = $request->licenseecity;
        $newcopyinfo->licenseenationality = $request->licenseenationality;
        $newcopyinfo->licenseestate = $request->licenseestate;
        $newcopyinfo->licenseecountry = $request->licenseecountry;
        $newcopyinfo->licenseetelno = $request->licenseetelno;
        $newcopyinfo->licenseeemail = $request->licenseeemail;
        $newcopyinfo->licenseefaxno = $request->licenseefaxno;




        $newcopyinfo->is_complete = "Pending";
        $newcopyinfo->user_id = auth()->user()->id;
        $newcopyinfo->save();

        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();

        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new NewFormNotification($newcopyinfo));
        }

        Log::info(json_encode($request->all()));
        return view('thankyou');
    }

    public function Update(Request $request, $formType, $id)
    {

        $newcopyinfo = copyinfo::findOrFail($id);

        $newcopyinfo->inventiontitle = $request->inventiontitle;
        $newcopyinfo->worktitle = $request->worktitle;
        $newcopyinfo->worktranslation = $request->worktranslation;
        $newcopyinfo->worktransliteration = $request->worktransliteration;
        $newcopyinfo->worklanguage = $request->worklanguage;

        if ($request->has('copyrightwork')) {
            // Convert array to comma-separated string and store in the database
            $newcopyinfo->copyrightwork = implode(', ', $request->copyrightwork);
        }

        if ($request->has('derivativework')) {
            // Convert array to comma-separated string and store in the database
            $newcopyinfo->derivativework = implode(', ', $request->derivativework);
        }

        $newcopyinfo->datecreate = $request->datecreate;

        if ($request->has('publication_status')) {
            $newcopyinfo->publication_status = $request->publication_status;

        }

        $newcopyinfo->year_compilation = $request->year_compilation;
        $newcopyinfo->date_first_publication = $request->date_first_publication;
        $newcopyinfo->country_publication = $request->country_publication;


        $newcopyinfo->authorname = $request->authorname;
        $newcopyinfo->authorid= $request->authorid;
        $newcopyinfo->authornationality = $request->authornationality;
        $newcopyinfo->authoraddress= $request->authoraddress;
        $newcopyinfo->authorpostcode = $request->authorpostcode;
        $newcopyinfo->authorcity= $request->authorcity;
        $newcopyinfo->authorstate = $request->authorstate;
        $newcopyinfo->authorcountry = $request->authorcountry;
        $newcopyinfo->authoremail = $request->authoremail;
        $newcopyinfo->telno = $request->telno;
        $newcopyinfo->faxno = $request->faxno;
        $newcopyinfo->ownername = $request->ownername;
        $newcopyinfo->ownerid = $request->ownerid;
        $newcopyinfo->companyname = $request->companyname;
        $newcopyinfo->companyno = $request->companyno;
        $newcopyinfo->owneradd = $request->owneradd;
        $newcopyinfo->ownerpostcode = $request->ownerpostcode;
        $newcopyinfo->ownercity = $request->ownercity;
        $newcopyinfo->ownernationality = $request->ownernationality;
        $newcopyinfo->ownerstate = $request->ownerstate;
        $newcopyinfo->ownercountry = $request->ownercountry;
        $newcopyinfo->ownertelno = $request->ownertelno;
        $newcopyinfo->owneremail = $request->owneremail;
        $newcopyinfo->ownerfaxno = $request->ownerfaxno;
        $newcopyinfo->licenseename = $request->licenseename;
        $newcopyinfo->licenseeid = $request->licenseeid;
        $newcopyinfo->licenseecompanyname = $request->licenseecompanyname;
        $newcopyinfo->licenseecompno = $request->licenseecompno;
        $newcopyinfo->licenseeadd = $request->licenseeadd;
        $newcopyinfo->licenseepostcode = $request->licenseepostcode;
        $newcopyinfo->licenseecity = $request->licenseecity;
        $newcopyinfo->licenseenationality = $request->licenseenationality;
        $newcopyinfo->licenseestate = $request->licenseestate;
        $newcopyinfo->licenseecountry = $request->licenseecountry;
        $newcopyinfo->licenseetelno = $request->licenseetelno;
        $newcopyinfo->licenseeemail = $request->licenseeemail;
        $newcopyinfo->licenseefaxno = $request->licenseefaxno;
        $newcopyinfo->save();

        // Get superadmin and admin users (role = 1,2)
        $admins = User::where('role', 1)->orWhere('role', 2)->get();

        // Send notification to admin's users
        foreach ($admins as $admin) {
            $admin->notify(new EditFormNotification($newcopyinfo));
        }
        return redirect()->route('custdash',);

    }

}
