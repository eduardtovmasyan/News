<?php

namespace App\Http\Controllers\api;

use Type;
use NewsList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Http\Resources\TypeResource;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = NewsList::index();

        return NewsResource::collection($news);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function filter($filter_id)
    {
        $news = NewsList::filter($filter_id);
        
        return NewsResource::collection($news);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = NewsList::show($id);

        return NewsResource::make($news);
    }

    public function getNewsTypes()
    {
        $types = Type::getall();

        return TypeResource::collection($types);
    }

}
