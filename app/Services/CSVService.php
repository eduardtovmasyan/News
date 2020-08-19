<?php

namespace App\Services;

use News;
use App\Mail\ExportCsv;
use Illuminate\Support\Facades\Mail;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Storage;

class CSVService
{
    public function send($request)
    {
        $news = News::filter($request->filterId);
        $news = $news->toArray();
        $fileName = time() . '.csv';
        $csv = fopen('storage/' . $fileName, 'w') or die("Unable to open file!");

        foreach ($news['data'] as $key) {
            fputcsv($csv, $key);
        }

        fclose($csv);
        Mail::to($request->email)->send(new ExportCsv($fileName));
    }
}
