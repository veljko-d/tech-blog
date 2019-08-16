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
                @if ($user->image)
                    <img src="/storage/{{ $user->image->path . '/' . $user->image->name . '.' . $user->image->ext}}" alt="avatar" class="content-img">
                @else
                    <img src="/images/avatars/default.png" alt="avatar" class="content-img">
                @endif

                @include ('layouts.errors')

                <form name="create" action="/avatar" method="POST" enctype="multipart/form-data" onsubmit="return validateNewForm()">
                    @csrf

                    <label for="file-upload" class="custom-file-upload"><i class="fas fa-images"></i> Select</label>
                    <input type="file" id="file-upload" name="image">

                    <input type="submit" value="Upload">
                </form>

                @if ($user->image)
                    <form method="POST" action="/avatar/{{ $user->image->id }}">
                        @method('DELETE')
                        @csrf

                        <input type="submit" value="Delete Avatar">
                    </form>
                @endif
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
