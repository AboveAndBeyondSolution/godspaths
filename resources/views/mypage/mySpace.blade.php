<?php
use App\Models\User;
?>

@extends('mypage.myPage')

@section('rightSideContent')

<b>{!! User::getRoleName() !!}</b>
<br/>

My Space
@endsection
