<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = News::latest()->paginate(5);
        return view('admin.news.index',compact('new'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'content' => 'required',
            
            ]);
            $input = $request->all();
            if ($image = $request->file('image')) {
            $destinationPath = 'images/news/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            }
            News::create($input);
            return redirect()->route('admin/news')->with('ok','News created ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $new
     * @return \Illuminate\Http\Response
     */
    public function show(News  $new)
    {
        return view('admin.news.show',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $new
     * @return \Illuminate\Http\Response
     */
    public function edit(News  $new)
    {
        return view('admin.news.edit',compact('new'));
    }

    public function update(Request $request, News  $new)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            ]);
            $input = $request->all();
            if ($image = $request->file('image')) {
            $destinationPath = 'images/news/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            }else{
                unset($input['image']);
            }
            $new->update($input);
            return redirect()->route('admin/news')->with('ok','News updated ok');
    }

    public function destroy(News $new)
    {
        $new->delete();
        return redirect()->route('admin/news')->with('ok','News deleted ok');
    }
}
