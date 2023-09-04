<?php

namespace App\Http\Controllers;

use App\Models\Meme;
use App\Http\Requests\StoreMemeRequest;
use App\Http\Requests\UpdateMemeRequest;

class MemeController extends Controller
{
    public function index()
    {
        dd('yes');
    }


    public function create()
    {
        //
    }

    public function store(StoreMemeRequest $request)
    {
        //
    }


    public function show(Meme $meme)
    {
        //
    }

    public function edit(Meme $meme)
    {
        //
    }

    public function update(UpdateMemeRequest $request, Meme $meme)
    {
        //
    }

    public function destroy(Meme $meme)
    {
        //
    }
}
