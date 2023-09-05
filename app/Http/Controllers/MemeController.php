<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use Illuminate\Http\Request;

class MemeController extends Controller
{
    public function index()
    {
        $memes = Meme::orderByDesc('id')->get();
        return view('admin.index', compact('memes'));
    }


    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $filename = '';
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'title' => 'required',
            'video' => 'required|mimes:mp4,avi,wmv|max:2048', // Example validation rules for video files
            'desc' => 'required',
        ]);
        if($request->hasFile('video')){
            $image = $request->file('video');
            $filename = $image->getClientOriginalName();
            $request->file('video')->storeAs('public/videos/' , $filename);
        }
        Meme::create([
            'category' => $request->input('category'),
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'video' => $filename,
            'description' => $request->input('desc')
        ]);
        $request->session()->flash('message', 'Video Uploaded Successfully!');
        return redirect()->route('meme.index');

    }


    public function show(Meme $meme)
    {
        //
    }


    public function destroy(Meme $meme, Request $request)
    {
        $meme->delete();
        $request->session()->flash('message', 'Deleted Successfully!');
        return redirect()->route('meme.index');
    }
}
