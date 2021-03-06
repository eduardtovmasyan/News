<?php

namespace App\Http\Controllers;

use News;
use Type;
use Illuminate\Http\Request;
use App\Http\Resources\NewsResource;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\NewsValidateRequest;
use App\Http\Requests\NewsUpdateValidationRequest;

class NewsController extends Controller
{
    public function showPostNewsPage()
    {
        $types = Type::getAll();
        $editors = News::admins();

        return view('admin.post_news')
            ->with('types', $types)
            ->with('editors', $editors);
    }

    public function showMyNewsPage()
    {
        $types = Type::getAll();
        $news = News::index();

        return view('admin.news')
            ->with('news', $news)
            ->with('types', $types);
    }

    public function showNewsDetailsPage($news_id)
    {
        $news = News::show($news_id);
        $news = NewsResource::make($news);

        return view('admin.news_details')
            ->with('news', $news);
    }

    public function showNewsInfoUpdatePage($news_id)
    {
        $types = Type::getAll();
        $news = News::show($news_id);
        $news = NewsResource::make($news);

        return view('admin.news_update_info')
            ->with('types', $types)
            ->with('news', $news);
    }

    public function showNewsImgUpdatePage($news_id)
    {
        $news = News::show($news_id);
        $news = NewsResource::make($news);

        return view('admin.news_update_img')
            ->with('news', $news);
    }

    public function showNewsEditorsUpdatePage($news_id)
    {
        $editors = News::editors($news_id);
        $news = News::show($news_id);
        $news = NewsResource::make($news);
        $admins = $news->users()->get();

        return view('admin.news_update_editors')
            ->with('news', $news)
            ->with('admins', $admins)
            ->with('editors', $editors);
    }
    
    public function imageDelete(Request $request, $news_id)
    {
        $news = News::show($news_id);
        
        $news->images()->where('id', $request->imageId)->delete();

        return response('Deleted', 200);
    }

    public function editorDelete(Request $request, $news_id)
    {
        $news = News::show($news_id);
        $news->users()->detach($request->editorId);

        return response('Deleted', 200);
    }

    public function addImages(Request $request, $news_id)
    {
        $news = News::addImg($request, $news_id);
        
        return Redirect::to('news/update/images/'.$news_id);
    }

    public function addEditors(Request $request, $news_id)
    {
        $news = News::addEditors($request, $news_id);
        
        return Redirect::to('news/'.$news_id.'/editors/update');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::index();

        return NewsResource::collection($news);
    }

    /**
     * Display a listing of the resource.
     *
     * @param $filter_id
     */
    public function filter($filter_id)
    {
        $types = Type::getAll();
        $news = News::filter($filter_id);
        $news = NewsResource::collection($news);

        return view('admin.news_filter')
            ->with('news', $news)
            ->with('types', $types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateInfo(NewsUpdateValidationRequest $request, $news_id)
    {
        $news = News::update($request, $news_id);

        return Redirect::to('news/'.$news_id);
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

        return redirect()->route('news');
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
}
