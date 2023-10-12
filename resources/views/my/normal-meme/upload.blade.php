@extends('layouts.my-space')

@section('rightSideContent')
    <h3>Upload My Normal Meme</h3>

    <form method="POST" action={{ route('my_space.normal_meme.store') }} enctype="multipart/form-data">
        @csrf

        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
            {{ Form::label('txtTitle', __('Title:'), [
                'class' => 'form-control-label',
            ]) }}

            {{ Form::text('title', old('title'), [
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

            {{ Form::textarea('description', old('description'), [
                'id' => 'txaDescription',
                'class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''),
                'placeholder' => __('Description'),
                'required' => '',
                'autofocus' => '',
                'rows' => 4,
            ]) }}

            @include('alerts.feedback', ['field' => 'description'])
        </div>

        <div class="form-group{{ $errors->has('image') ? ' has-danger' : '' }}">
            <label class="form-control-label" for="input-name">{{ __('Image') }}</label>
            <div class="custom-file">
                <input type="file" name="image" class="custom-file-input{{ $errors->has('image') ? ' is-invalid' : '' }}"
                    id="input-picture" accept="image/*">
                <label class="custom-file-label" for="input-picture">{{ __('Select profile image') }}</label>
            </div>

            @include('alerts.feedback', ['field' => 'image'])
        </div>

        {!! Form::submit('Upload') !!}
    </form>
@endsection
