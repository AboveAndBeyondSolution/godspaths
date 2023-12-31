@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="d-flex justify-content-between col-12">

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
        </div> --}}

        <style>

        </style>
        <div class="search-bar">
            <input type="text" class="form-group" placeholder="Search...">
        </div>
        <div class="item-container">
            <div class="item">
                <a href="highEnergyMeme">
                    <img src="http://placekitten.com/300/200">
                    <div class="text">High Energy Meme</div>
                </a>
            </div>
            <div class="item">
                <a href="normalMeme">
                    <img src="http://placekitten.com/299/200">
                    <div class="text">Normal Meme</div>
                </a>
            </div>
            <div class="item">
                <a href="recommendRead">
                    <img src="http://placekitten.com/300/202">
                    <div class="text">Recommend Read</div>
                </a>
            </div>
            {{-- <div class="item">
                <a href="recommendWatch">
                    <img src="http://placekitten.com/301/301">
                    <div class="text">Recommend Watch</div>
                </a>
            </div>
            <div class="item">
                <a href="recommendMusic">
                    <img src="http://placekitten.com/309/305">
                    <div class="text">Recommend Music</div>
                </a>
            </div> --}}
            <div class="item">
                <a href="recommendGame">
                    <img src="http://placekitten.com/305/200">
                    <div class="text">Recommend Game</div>
                </a>
            </div>
            <div class="item">
                <a href="recommendWebsite">
                    <img src="http://placekitten.com/305/199">
                    <div class="text">Recommend Website</div>
                </a>
            </div>
            <div class="item">
                <a href="{{ url('/shareThePath') }}">
                    <img src="http://placekitten.com/298/195">
                    <div class="text">Share The PATH</div>
                </a>
            </div>
            <!-- Add more items here -->
        </div>
    </div>
@endsection


