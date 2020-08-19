<?php

namespace App\Http\Controllers;

use CSV;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportCSV(Request $request)
    {
        CSV::send($request);

        return back();
    }
}
