<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vtiful\Kernel\Excel;

class ImportController extends Controller
{
    public function importForm()
    {
        return view('import.form');
    }
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        try {
            $data = Excel::toArray(new DataImport, $request->file('file'));

            // Assuming your DataImport class processes and validates the data, you can use it like this:
            foreach ($data[0] as $row) {
                // Process and validate the data here if necessary
                // For example, you can create new user records:
                DB::table('users')->insert([
                    'name' => $row['name'],
                    'email' => $row['email'],
                    // Add other columns as needed
                ]);
            }

            return redirect()->back()->with('success', 'Data imported successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error importing data: ' . $e->getMessage());
        }
    }
}
