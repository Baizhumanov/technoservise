<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Author;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $this->validate($request, [
            'content' => 'required',
        ]);
        $this->validate($request, [
            'preview-image' => 'required',
        ]);
        $this->validate($request, [
            'author' => 'required',
        ]);
        $this->validate($request, [
            'section' => 'required',
        ]);

        $data = (object) $request->all();
        $path = $request->file('preview-image')->store('public/news');

        $date =

        $news = new News;
        $news->title = $data->title;
        $news->content = $data->content;
        $news->date = date("Y-m-d H:i:s");
        $news->preview_image = $path;
        $news->author_id = $data->author;
        $news->section_id = $data->section;
        $news->save();

        return redirect()->route('news');
    }

    public function news(Request $request)
    {
        $news = News::where('id', $request->id)->first();

        return view('news_detail', [
            'title' => $news->title,
            'date' => $news->date,
            'image' => $news->preview_image,
            'content' => $news->content,
            'author' => Author::where('id', $news->author_id)->first()->fullname,
        ]);
    }
}
