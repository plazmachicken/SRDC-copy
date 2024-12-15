<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AnalyticsController extends Controller
{
    public function index()
    {
        $data = DB::table('ip_status')->select('is_complete', DB::raw('count(*) as total'))->groupBy('is_complete')->get();
        return view('admin.analytics.index', compact('data'));
    }

    //gets data for specific month to regenerate chart according to month
    public function getDataForMonth(Request $request)
    {
       try {

            $month = $request->query('month');

            $data = DB::table('ip_status')
                ->select(DB::raw('is_complete, count(*) as total'))
                ->whereMonth('created_at', $month)
                ->groupBy('is_complete')
                ->get();

            return response()->json($data);
       } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
       }

    }

    //gets data for specific month for csv download
    public function getDataForMonthCsv(Request $request)
    {
        $month = $request->query('month');

        $data = DB::table('ip_status')
            ->whereMonth('created_at', $month)
            ->get();

        $csvHeader = ['Type of IP', 'Invention Title', 'Status', 'Submitted On'];
        $csvData = $data->map(function ($row) {
            return [
                'formType' => $row->formType,
                'inventionTitle' => $row->inventionTitle,
                'status' => ($row->is_complete === 0 ? 'Pending' : ($row->is_complete === 1 ? 'Approved' : 'Denied')),
                'createdAt' => $row->created_at,
            ];
        })->toArray();

        $filename = "data_for_month_{$month}.csv";
        $filePath = storage_path($filename);
        $handle = fopen($filePath, 'w+');
        fputcsv($handle, $csvHeader);

        foreach($csvData as $row) {
            fputcsv($handle, $row);
        }

        fclose($handle);

        $headers = ['Content-Type' => 'text/csv'];
        return response()->download($filePath, $filename, $headers);
    }

 
}
