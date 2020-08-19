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
        $myfile = fopen('storage/' . time() . ".csv", "a") or die("Unable to open file!");

        foreach ($news['data'] as $key) {
            fputcsv($myfile, $key);
        }

        fclose($myfile);

        $contents = Storage::get($myfile);

        Mail::to($request->email)->send(new ExportCsv($contents));
    }
}
