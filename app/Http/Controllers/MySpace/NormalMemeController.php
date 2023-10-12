<?php

namespace App\Http\Controllers\MySpace;

use App\Http\Controllers\AuthProtectedController;
use App\Http\Requests\MySpace\NormalMeme\NormalMemeStoreRequest;
use App\Http\Requests\MySpace\NormalMeme\NormalMemeUpdateRequest;
use App\Models\NormalMeme;

class NormalMemeController extends AuthProtectedController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $arrNormalMemes = $user->normalMemes()->paginate(5);

        return view('my.normal-meme.index', compact(
            'arrNormalMemes'
        ));
    }

    public function create()
    {
        return view('my/normal-meme/upload');
    }

    public function store(NormalMemeStoreRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('normal-meme'), $filename);
        $data['image_url'] = 'normal-meme/' . $filename;

        NormalMeme::create($data);

        return redirect(route('my_space.normal_meme.index'));
    }

    public function edit(NormalMeme $normal_meme)
    {
        $user_id = auth()->user()->id;
        if ($user_id !== $normal_meme->user->id) {
            return redirect(route('my_space.normal_meme.index'));
        }

        return view('my.normal-meme.edit', compact(
            'normal_meme'
        ));
    }

    public function update(NormalMeme $normal_meme, NormalMemeUpdateRequest $request)
    {
        $data = $request->all();
        $normal_meme->update($data);

        return redirect(route('my_space.normal_meme.index'));
    }

    public function destroy(NormalMeme $normal_meme)
    {
        $image_path = public_path($normal_meme->image_url);
        if ($normal_meme->image_url && file_exists($image_path)) {
            unlink($image_path);
        }
        $normal_meme->delete();

        return redirect(route('my_space.normal_meme.index'));

        // dd(public_path($normal_meme->image_url), $normal_meme);
    }
}
