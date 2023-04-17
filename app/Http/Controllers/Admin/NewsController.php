<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news')->with('news', $news);
    }

    
    public function store(Request $request)
    {
        $news = new News;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . "." . $image->getClientOriginalExtension();
            $image->move('public/images/news/', $filename);
            $news->image= $filename;
        }
        $news->title = $request->input('title');
        $news->contents = $request->input('contents');
        
        $news->save();
        return redirect('/news')->with('status', 'Add new brand successfully!');
    }

    public function news()
    {
        $news = News::all();
        return view('admin.news')->with('news', $news );
    }

    public function newsedit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.news-edit')->with('news', $news );
    }

    public function newsupdate(Request $request, $id)
    {
        $news = News::find($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . "." . $image->getClientOriginalExtension();
            $image->move('public/images/news/', $filename);
            $news->image = $filename;
        }
        $news->title = $request->input('title');
        $news->contents = $request->input('contents');
        $news->update();

        return redirect('/news')->with('status', 'Updated Successfully!');
    }

    public function newsdelete($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('/news')->with('status', 'Deleted Successfully!');
    }
}
