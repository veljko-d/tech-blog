@extends('layouts.app')

@section('title', 'Profile')

@section('css')
    <link href="{{ asset('css/users/profile.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-3"></div>

    <div class="col-6">
        <div id="section">
            <div id="img-cont">
                {{-- <img src="/storage/images/users/{{ $user->slug . '/' . $image->name . '.' . $image->ext}}" alt="avatar" class="content-img"> --}}
                <img src="/images/avatars/default.png" alt="avatar" class="content-img">

                <div id="overlay">Change your avatar</div>
            </div>

            <p><i class='fas fa-user'></i> Username: {{ $user->name }}</p>
            <hr>

            <p><i class='fas fa-envelope'></i> Email: {{ $user->email }}</p>
            <hr>

            <p><i class='fas fa-key'></i> Password</p>
            <hr>

            <p><i class='fas fa-calendar-check'></i> Joined: {{ $user->created_at->diffForHumans() }}</p>
            <hr>

            <p id="show">Show stats ▾</p>

            <div id="stats">
                <p>• Number of posts: </p>
                <p>• Number of images uploaded: </p>
                <p>• Number of comments: </p>
            </div>
        </div>
    </div>

    <div class="col-3"></div>
@endsection

@section('js')
    <script src="{{ asset('js/users/profile.js') }}"></script>
@endsection
