<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vtiful\Kernel\Excel;

class ExportController extends Controller
{
    public function export()
    {
        return Excel::download(new DataExport, 'data.xlsx');
    }
}
