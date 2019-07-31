@extends('layouts.app')

@section('title', 'Posts')

@section('css')
    <link href="{{ asset('css/posts/index.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-3">
        <div id="categories">
            <a href="/posts?category=1">Mobile</a>
            <a href="/posts?category=2">Hardware</a>
            <a href="/posts?category=3">Software</a>
            <a href="/posts?category=4">Games</a>
            <a href="/posts?category=5">Internet</a>
        </div>
    </div>

    <div class="col-6">
        @foreach ($posts as $post)
            @include ('posts.post')
        @endforeach

        <div id="pagination">
            {{ $posts->links() }}
        </div>
    </div>

    <div class="col-3"></div>
@endsection

@section('js')
    <script src="{{ asset('js/posts/index.js') }}"></script>
@endsection
