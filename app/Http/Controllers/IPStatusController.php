<?php

namespace App\Http\Controllers;

use App\Models\copyinfo;
use App\Models\geoinfo;
use App\Models\Indust;
use App\Models\info;
use App\Models\Patinfo;
use App\Models\UtilInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IPStatusController extends Controller
{
    public function Show($formType, $id)
    {
        switch ($formType) {
            case 1:
                $entry = geoinfo::where('formType', $formType)->find($id);
                break;
            case 2:
                $entry = info::where('formType', $formType)->find($id);
                break;
            case 3:
                $entry = copyinfo::where('formType', $formType)->find($id);
                break;
            case 4:
                $entry = Indust::where('formType', $formType)->find($id);
                break;
            case 5:
                $entry = Patinfo::where('formType', $formType)->find($id);
                break;
            case 6:
                $entry = UtilInfo::where('formType', $formType)->find($id);
                break;
            default:
                // Handle default case or throw an error
                break;
        }


        // Debug output to check if $entry, $formType, and $id are passed correctly
        // dd($entry, $formType, $id);

        if ($entry) {
            // Pass the $entry, $formType, and $id to the view
            if (Auth::user()->role == 1 || Auth::user()->role == 2) {
                return view('admin.allip.show', compact('entry', 'formType', 'id'));

            } else {
                return view('ipstatus.show', compact('entry', 'formType', 'id'));

            }
        } else {
            // Handle the case when the record is not found
            print ("No entry found for formType: $formType and id: $id");
            // or redirect, return a message, etc.
        }
    }

    public function Edit($formType, $id)
    {
        switch ($formType) {
            case 1:
                $entry = geoinfo::where('formType', $formType)->find($id);
                // dd($entry);
                return view('edit-form.geographic', compact('entry', 'formType', 'id'));

            case 2:
                $entry = info::where('formType', $formType)->find($id);


                return view('edit-form.trade', compact('entry', 'formType', 'id'));


            case 3:
                $entry = copyinfo::where('formType', $formType)->find($id);
                //  dd($entry);
                return view('edit-form.copyform', compact('entry', 'formType', 'id'));

            case 4:
                $entry = Indust::where('formType', $formType)->find($id);
                return view('edit-form.industrialform', compact('entry', 'formType', 'id'));

            case 5:
                $entry = Patinfo::where('formType', $formType)->find($id);
                //  dd($entry);
                return view('edit-form.patent', compact('entry', 'formType', 'id'));

            case 6:
                $entry = UtilInfo::where('formType', $formType)->find($id);

                return view('edit-form.utility', compact('entry', 'formType', 'id'));

            default:
                // Handle default case or throw an error
                break;
        }


    }



    // Other controller methods (if any) can be placed here
}
