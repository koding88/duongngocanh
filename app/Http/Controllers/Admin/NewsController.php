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
        return view('admin.news.index',compact('news'));
        
        // return view('news')->with('news', $news);
    }
    public function add()
    {
        $news = News::all();
        return view('admin.news.add',compact('news'));
    }
    public function store(Request $request)
    {

        $news = new News;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . "." . $image->getClientOriginalExtension();
            $image->move('images/news/', $filename);
            $news->image = $filename;
        }
        $news->title = $request->input('title');
        $news->contents = $request->input('contents');

        $news->save();
        return redirect('admin/news')->with('status', 'Add new brand successfully!');
    }

    
    public function news()
    {
        $news = News::all();
        return view('admin/news')->with('news', $news );
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        return view ('admin.news.create');
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('admin/news')->with('status', 'Deleted Successfully!');
    }
}
