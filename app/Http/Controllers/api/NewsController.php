<?php

namespace App\Http\Controllers\api;

use NewsList;
use App\Type;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = NewsList::show();

        return NewsResource::make($news);
    }

    public function getNewsTypes()
    {
        $types = Type::all();

        return TypeResource::collection($types);
    }

}
