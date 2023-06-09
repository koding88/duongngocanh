<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $news = News::all();
        return view('admin.news.create')->with('news', $news);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->user_id);
        $news = News::all();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'content' => 'required',
        ]);

        // client img name and server img must be diff
        $generatedImageName = 'image' . time() . '-'
            . $request->name . '.'
            . $request->image->extension();

        // move to a folder
        $request->image->move(public_path('images'), $generatedImageName);

        $news = News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id,
            'image_path' => $generatedImageName
        ]);
        $news->save();
        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::find($id);
        $user = User::find($news->user_id);
        $news->user = $user;
        return view('admin.news.show')->with('news', $news);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(string $id)
    {

        $news = News::find($id);
        return view('admin.news.edit')->with('news', $news);
    }

    public function update(Request $request, string $id)
    {
        $news = News::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        // Update image if a new one is uploaded
        if ($request->hasFile('image')) {
            $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $generatedImageName);
            $news->image_path = $generatedImageName;
        }

        // Update other product fields
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->save();
        return redirect('admin/news');
    }

    public function destroy(string $id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('admin/news');
    }
}
