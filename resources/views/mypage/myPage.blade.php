@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mt-4 px-5">
            <h4>My Page</h4>
            <a href="#" class="btn btn-secondary btn-back">Back</a>
        </div>
        <!-- Sidebar -->
        <div class="mx-5 mt-3 border d-flex p-1 rounded">

            <div class="col-2 border-right">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('mySpace') ? 'active' : '' }}" href="{{ url('mySpace') }}">My
                            Space</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}"
                            href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('resetPassword') ? 'active' : '' }}"
                            href="{{ url('resetPassword') }}
                            ">Reset Password</a>
                    </li>
                </ul>
            </div>
            <div class="col-10">
                @yield('rightSideContent')
            </div>
        </div>
    </div>
@endsection
