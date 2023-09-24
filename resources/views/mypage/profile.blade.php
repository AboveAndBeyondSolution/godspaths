@extends('mypage.myPage')

@section('rightSideContent')
    <div class="d-flex align-items-center justify-content-center">
        <div class="text-center">
            <img src="https://via.placeholder.com/150" class="rounded-circle mb-4" alt="Profile Picture">
            <div class="mb-3">
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div>
    @endsection
