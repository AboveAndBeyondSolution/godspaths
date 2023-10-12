@extends('layouts.my-space')

@section('rightSideContent')
    <h3>My Normal Meme</h3>

    <a href="{!! route('my_space.normal_meme.create') !!}">Upload Normal Meme</a>

    <div>
        @foreach ($arrNormalMemes as $normal_meme)
            <div>
                <div>Title: {!! $normal_meme->title !!}</div>
                <div>Description: {!! $normal_meme->description !!}</div>
                <div>Uploaded at: {!! date('d/m/Y H:i', strtotime($normal_meme->created_at)) !!}</div>
                <div>Updated at: {!! date('d/m/Y H:i', strtotime($normal_meme->updated_at)) !!}</div>
                <img src="{!! url($normal_meme->image_url) !!}" width="200" height="200">

                <a href="{!! route('my_space.normal_meme.edit', $normal_meme) !!}"> Edit</a>
                <form method="post" action="{!! route('my_space.normal_meme.destory', $normal_meme) !!}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Remove">
                </form>
            </div>
        @endforeach
    </div>
@endsection
