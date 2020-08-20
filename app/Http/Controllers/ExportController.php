<?php

namespace App\Http\Controllers;

use CSV;
use Illuminate\Http\Request;
use App\Http\Requests\ExportValidationRequest;

class ExportController extends Controller
{
    public function exportCSV(ExportValidationRequest $request)
    {
        CSV::send($request);

        return back();
    }
}
