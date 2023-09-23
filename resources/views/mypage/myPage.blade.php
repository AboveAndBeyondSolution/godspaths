@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mt-4 px-5">
            <h4>Recommend Website</h4>
            <a href="#" class="btn btn-secondary btn-back">Back</a>
        </div>
        <!-- Sidebar -->
        <div class="mx-5 mt-3 card d-flex">

            <div class="col-3 border-right">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('my-space') ? 'active' : '' }}" href="{{ url('mySpace') }}">My
                            Space</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profile') ? 'active' : '' }}"
                            href="{{ url('profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('reset-password') ? 'active' : '' }}"
                            href="{{ url('resetPassword') }}">Reset Password</a>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                @yield('rightSideContent')
            </div>
        </div>
    </div>
@endsection
