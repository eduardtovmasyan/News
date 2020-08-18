<?php

namespace App\Services;

use App\News;
use App\Contracts\NewsInterface;

class NewsListService
{
    protected  $newsModel;

    function __construct(News $newsModel)
    {
        $this->news = $newsModel;
    }

    public function index()
    {   
        return $this->news->orderBy('id', 'desc')->paginate(20);
    }

    public function show($news_id)
    {
        return $this->news::findOrFail($news_id);
    }
}
