<?php
use App\Models\User;
?>

@extends('mypage.myPage')

@section('rightSideContent')
    <b>{!! User::getRoleName() !!}</b>
    <br />
    <div class="container">

        <div class="row justtify-content-space">
            <div class="col-md-4 col-sm-12">
                <a href="{{ url('my/high-meme') }}" class="d-block border border-black p-2 my-3 shadow link-secondary text-decoration-none">
                    <img src="{{ asset('img/high-meme.jpeg') }}" alt="" width="100%" >
                    <div class="my-3">My High Meme</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="{{ url('my/normal-meme') }}" class="d-block border border-black p-2 my-3 shadow link-secondary text-decoration-none">
                    <img src="{{ asset('img/normal-meme.jpeg') }}" alt="" width="100%" >
                    <div class="my-3">My Normal Meme</div>
                </a>
            </div>
            <div class="col-md-4 col-sm-12">
                <a href="{{ url('my/recommend-read') }}" class="d-block border border-black p-2 my-3 shadow link-secondary text-decoration-none">
                    <img src="{{ asset('img/read.jpeg') }}" alt="" width="100%" >
                    <div class="my-3">My Recommend Read</div>
                </a>
                </div>
        </div>
    </div>
@endsection
