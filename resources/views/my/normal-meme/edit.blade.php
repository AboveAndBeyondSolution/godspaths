@extends('layouts.my-space')

@section('rightSideContent')
    <h3>Upload My Normal Meme</h3>

    <form method="POST" action={{ route('my_space.normal_meme.update', $normal_meme) }}>
        @csrf

        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
            {{ Form::label('txtTitle', __('Title:'), [
                'class' => 'form-control-label',
            ]) }}

            {{ Form::text('title', $normal_meme->title, [
                'id' => 'txtTitle',
                'class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''),
                'placeholder' => __('Title'),
                'required' => '',
                'autofocus' => '',
            ]) }}

            @include('alerts.feedback', ['field' => 'title'])
        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
            {{ Form::label('txaDescription', __('Description:'), [
                'class' => 'form-control-label',
            ]) }}

            {{ Form::textarea('description', $normal_meme->description, [
                'id' => 'txaDescription',
                'class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),
                'placeholder' => __('Description'),
                'required' => '',
                'autofocus' => '',
                'rows' => 4,
            ]) }}

            @include('alerts.feedback', ['field' => 'description'])
        </div>

        <img src="{!! url($normal_meme->image_url) !!}" width="200" height="200">

        {!! Form::submit('Update') !!}
    </form>
@endsection
