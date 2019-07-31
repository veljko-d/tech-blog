@extends('layouts.app')

@section('title', 'Edit Post')

@section('css')
    <link href="{{ asset('css/posts/create-edit.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-3"></div>

    <div class="col-6">
        <!-- EDIT POST FORM -->
        <div id="container">
            <div id="form-head">
                <h1><i class="far fa-edit"></i> Edit post</h1>

                <hr>

                <p id="val-info"></p>

                @include ('layouts.errors')
            </div>

            <form name="edit" action="{{ route('posts.update', ['slug' => $post->slug]) }}" method="POST" onsubmit="return validateEditForm()">
                @method('PATCH')
                @csrf

                <label for="title"><i class="fas fa-pen"></i> Title</label>
                <input type="text" name="title" value="{{ $post->title }}">

                <label for="source"><i class="fas fa-link"></i> Source</label>
                <input type="text" name="source" value="{{ $post->source }}">

                <label for="title"><i class="fas fa-tags"></i> Tags <span>(use semicolon to separate tags)</span></label>
                <input type="text" name="tags" value="@foreach ($post->tags as $tag){{ $tag['name'] }}; @endforeach">

                <label for="content"><i class="fas fa-align-justify"></i> Text</label>
                <textarea name="content" rows="12">{{ $post->content }}</textarea>

                <div id="select">
                    <p>Select Category:</p>

                    <select name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if ($category->id == $post->category_id) selected @endif>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <hr>

                <input type="submit" value="Save">

                <a href="{{url()->previous()}}" id="cancel-button">Cancel</a>

            </form>
        </div>
    </div>

    <div class="col-3 col-s-1"></div>
@endsection

@section('js')
    <script src="{{ asset('js/posts/create-edit.js') }}"></script>
@endsection
