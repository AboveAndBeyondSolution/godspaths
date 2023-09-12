@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="d-flex justify-content-between col-12">

                            {{-- {{ __('You are logged in!') }} --}}
                            <h3 class="text-success">Blogs</h3>
                            <a href="/create" class="btn btn-success">+ Add</a>
                        </div>
                        @foreach ($textData as $data)
                            <hr>
                            <div class="mt-3 col-12 d-flex justify-content-between">
                                <div class="">

                                    <h5 class="text-success">{{ $data->title }}</h5>
                                    <p>{{ $data->body }}</p>
                                </div>
                                <div class="">
                                    <a href="{{ route('edit', ['id' => $data->id]) }}" class="btn btn-outline-success">Edit</a>
                                    <a href="{{ route('delete', ['id' => $data->id]) }}" class="btn btn-outline-secondary"
                                        onclick="return confirm('Are you sure you want to delete this blog post?')">Remove</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
