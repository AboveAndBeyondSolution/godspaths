@extends('layouts.my-space')

@section('rightSideContent')
    <h3>My High Meme</h3>

    <a href="{!! route('my_space.high_meme.create') !!}">Upload High Meme</a>

    <div>
        @foreach ($arrHighMemes as $high_meme)
            <div>
                <div>Title: {!! $high_meme->title !!}</div>
                <div>Description: {!! $high_meme->description !!}</div>
                <div>Uploaded at: {!! date('d/m/Y H:i', strtotime($high_meme->created_at)) !!}</div>
                <div>Updated at: {!! date('d/m/Y H:i', strtotime($high_meme->updated_at)) !!}</div>
                <img src="{!! url($high_meme->image_url) !!}" width="200" height="200">

                <a href="{!! route('my_space.high_meme.edit', $high_meme) !!}"> Edit</a>
                <form method="post" action="{!! route('my_space.high_meme.destory', $high_meme) !!}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Remove">
                </form>
            </div>
        @endforeach
    </div>
@endsection
