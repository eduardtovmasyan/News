<?php

namespace App\Http\Controllers;

use News;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Resources\NewsResource;
use App\Http\Resources\NewsShortResource;
use App\Http\Requests\NewsValidateRequest;

class NewsController extends Controller
{
    public function showPostNewsPage()
    {
        $types = Type::all();

        return view('admin.post_news')
            ->with('types', $types);
    }

    public function showMyNewsPage()
    {
        $types = Type::all();

        $news = News::index();
        $news = NewsShortResource::collection($news);

        return view('admin.news')
            ->with('types', $types)
            ->with('news', $news);
    }

    public function showNewsDetailsPage($news_id)
    {
        $news = News::show($news_id);
        $news = NewsResource::make($news);

        return view('admin.news_details')
            ->with('news', $news);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsValidateRequest $request)
    {
        $news = News::store($request);

        return NewsResource::make($news);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($news_id)
    {
        $news = News::show($news_id);

        return NewsResource::make($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
