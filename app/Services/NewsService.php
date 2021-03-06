<?php

namespace App\Services;

use App\News;
use App\User;
use App\File;
use App\Image;
use App\Contracts\NewsInterface;
use Illuminate\Support\Facades\Auth;

class NewsService implements NewsInterface
{
    protected $newsModel;

    function __construct(News $newsModel)
    {
        $this->news = $newsModel;
    }

    public function index()
    {
        return $this->news->whereHas('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->orWhere('author', Auth::id())->orderBy('id', 'desc')->paginate(6);
    }

    public function store($request) 
    {
        $images = [];
        $files = [];

        $news = $this->news->create([
            'news' => $request->news,
            'title' => $request->title,
            'type_id' => $request->type,
            'author' => Auth::id(),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public');
                $images[] = Image::make(['path' => $path]);
            }
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('uploads', 'public');
                $files[] = File::make(['path' => $path]);
            }
        }

        $news->images()->saveMany($images);
        $news->files()->saveMany($files);
        $news->users()->attach($request->editors);

        return $news;
    }

    public function show($news_id)
    {
        return $this->news::findOrFail($news_id);
    }

    public function update($request, $news_id)
    {
        $news = $this->news::findOrFail($news_id);

        $news->update([
            'title' => $request->title,
            'news' => $request->news,
            'type_id' => $request->type_id,
        ]);

        return $news;
    }

    public function destroy($news_id)
    {
        $this->news::whereId($news_id)
            ->delete();
    }

    public function editors($news_id)
    {
        $news = $this->news::findOrFail($news_id);

        return User::where(function ($query) {
            $query->whichAcceptedPanelAdmin()
                ->orWhere('role', User::TYPE_SUPER_ADMIN);
        })->where('id', '!=', $news->author)
        ->whereDoesntHave('news', function ($query) use ($news_id) {
            $query->where('news.id', $news_id);
        })->get();
    }

    public function admins()
    {
        return User::where('id', '!=', Auth::id())->where(function ($query) {
            $query->whichAcceptedPanelAdmin()
                ->orWhere('role', User::TYPE_SUPER_ADMIN);
        })->get();
    }

    public function filter($filter_id)
    {
        return $news = $this->news
        ->whereHas('users', function ($query) {
            $query->where('user_id', Auth::id());
        })
        ->orWhere('author', Auth::id())
        ->where('type_id', $filter_id)->paginate(6);
    }

    public function addImg($request, $news_id) 
    {
        $images = [];
        $files = [];

        $news = $this->news::findOrFail($news_id);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public');
                $images[] = Image::make(['path' => $path]);
            }
        }

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('uploads', 'public');
                $files[] = File::make(['path' => $path]);
            }
        }

        $news->images()->saveMany($images);
        $news->files()->saveMany($files);

        return $news;
    }

    public function addEditors($request, $news_id) 
    {
        $news = $this->news::findOrFail($news_id);
        $news->users()->syncWithoutDetaching($request->editors);
        
        return $news;
    }
}
