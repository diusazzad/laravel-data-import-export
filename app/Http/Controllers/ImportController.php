<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ImportController extends Controller
{

    public function importForm()
    {
        return view('import.form');
    }
    public function upload(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048', // Validate file type and size
        ]);

        if ($request->file('csv_file')->isValid()) {
            $file = $request->file('csv_file');
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Store the file in a directory (e.g., storage/csv)
            $file->storeAs('csv', $fileName);

            return redirect()->back()->with('success', 'CSV file uploaded successfully.');
        }

        return redirect()->back()->with('error', 'Invalid CSV file.');
    }

}
