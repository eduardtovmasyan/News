<?php

namespace App\Http\Controllers;

use News;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Resources\NewsResource;
use App\Http\Requests\NewsValidateRequest;

class NewsController extends Controller
{
    public function showPostNewsPage()
    {
        $types = Type::all();

        return view('admin.post_news')
            ->with('types', $types);
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
    public function show($id)
    {
        //
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
