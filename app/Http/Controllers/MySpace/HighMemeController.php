<?php

namespace App\Http\Controllers\MySpace;

use App\Http\Controllers\AuthProtectedController;
use App\Http\Requests\MySpace\HighMeme\HighMemeStoreRequest;
use App\Http\Requests\MySpace\HighMeme\HighMemeUpdateRequest;
use App\Models\HighMeme;

class HighMemeController extends AuthProtectedController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $arrHighMemes = $user->highMemes()->paginate(5);

        return view('my.high-meme.index', compact(
            'arrHighMemes'
        ));
    }

    public function create()
    {
        return view('my/high-meme/upload');
    }

    public function store(HighMemeStoreRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('high-meme'), $filename);
        $data['image_url'] = 'high-meme/' . $filename;

        HighMeme::create($data);

        return redirect(route('my_space.high_meme.index'));
    }

    public function edit(HighMeme $high_meme)
    {
        $user_id = auth()->user()->id;
        if ($user_id !== $high_meme->user->id) {
            return redirect(route('my_space.high_meme.index'));
        }

        return view('my.high-meme.edit', compact(
            'high_meme'
        ));
    }

    public function update(HighMeme $high_meme, HighMemeUpdateRequest $request)
    {
        $data = $request->all();
        $high_meme->update($data);

        return redirect(route('my_space.high_meme.index'));
    }

    public function destroy(HighMeme $high_meme)
    {
        $image_path = public_path($high_meme->image_url);
        if ($high_meme->image_url && file_exists($image_path)) {
            unlink($image_path);
        }
        $high_meme->delete();

        return redirect(route('my_space.high_meme.index'));

        // dd(public_path($high_meme->image_url), $high_meme);
    }
}
