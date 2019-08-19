@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('css')
    <link href="{{ asset('css/posts/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/posts/comments.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-3"></div>

    <div class="col-6">
        <!-- Post Path -->
        <div id="path">
            <a href="{{ url('/') }}">Home</a> ›
            <a href="/posts/categories/{{ $post->category->category->slug }}">{{ $post->category->category->name }}</a> ›
            <a href="/posts/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </div>

        <div id="post-content">
            <h2><span>{{ $post->title }}</span></h2>

            <hr>

            <!-- Post Header -->
            <div id="sec1">
                <div>
                    <i class="fas fa-clock"></i>
                    <p>{{ $post->created_at->toFormattedDateString() }}</p>
                    <p>|</p>

                    <i class="fas fa-user"></i>
                    <p>Posted by: <a href="/user/{{ $post->user_id }}/posts">{{ $post->user_name }}</a></p>
                    <p>|</p>

                    <i class="fas fa-comment"></i>
                    <p>{{ $post->comments->count() }}</p>
                </div>

                <div>
                    <p id="show-size">Text size <span>▸</span></p>

                    <button id="default">default</button>
                    <button id="increase">+</button>
                    <button id="decrease">‒</button>
                </div>
            </div>

            <!-- Post content -->
            <div id="pst-cnt">
                @foreach ($post->images as $image)
                    <img src="/storage/{{ $image->path . '/' . $image->name . '.' . $image->ext}}" alt="{{ $image->name . '.' . $image->ext }}" class="content-img">
                @endforeach

                {{ $post->content }}
            </div>

            <hr>

            <!-- Post source & Tags -->
            <div id="post-bottom">
                @if ($post->source)
                    <a href="{{ $post->source }}" target="_blank" id="post-src"><i class="fas fa-link"></i> Source</a>
                @endif

                <div id="tags">
                    @foreach ($post->tags as $tag)
                        <p><a href="/posts/tags/{{ $tag['slug'] }}">{{ $tag['name'] }}</a></p>
                    @endforeach

                    <p><i class="fas fa-tags"></i> Tags:</p>
                </div>
            </div>

            <!-- Edit/Delete post -->
            <div id="sec2">
                <p id="comm">Show comment section ▾</p>

                @if (Auth::check() && $post->user_id === Auth::id())
                    <form method="POST" action="{{ route('posts.destroy', ['slug' => $post->slug]) }}">
                        @method('DELETE')
                        @csrf

                        <button type="submit" id="p-del" title="Delete post">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>

                    <button title="Edit post">
                        <a id="p-edit" href="{{ route('posts.edit', ['slug' => $post->slug]) }}">
                            <i class="far fa-edit"></i>
                        </a>
                    </button>
                @endif
            </div>
        </div>

        <!-- Include comment section -->
        @include ('posts.comments')
    </div>

    <div class="col-3"></div>
@endsection

@section('js')
    <script src="{{ asset('js/posts/show.js') }}"></script>
@endsection
