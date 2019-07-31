@extends('layouts.app')

@section('title', 'Create Post')

@section('css')
    <link href="{{ asset('css/posts/create-edit.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-3"></div>

    <div class="col-6">
        <!-- CREATE POST FORM -->
        <div id="container">
            <div id="form-head">
                <h1><i class="far fa-sticky-note"></i> Create post</h1>

                <hr>

                <p id="val-info"></p>

                @include ('layouts.errors')
            </div>

            <form name="create" action="{{ route('posts.store') }}" method="POST" onsubmit="return validateNewForm()">
                @csrf

                <label for="title"><i class="fas fa-pen"></i> Title</label>
                <input type="text" name="title">

                <label for="source"><i class="fas fa-link"></i> Source</label>
                <input type="text" name="source">

                <label for="title"><i class="fas fa-tags"></i> Tags <span>(use semicolon to separate tags)</span></label>
                <input type="text" name="tags">

                <label for="content"><i class="fas fa-align-justify"></i> Text</label>
                <textarea name="content" rows="12"></textarea>

                <div id="select">
                    <p>Select Category:</p>

                    <select name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <hr>

                <input type="submit" value="Save">

                <a href="{{url()->previous()}}" id="cancel-button">Cancel</a>

            </form>
        </div>
    </div>

    <div class="col-3"></div>
@endsection

@section('js')
    <script src="{{ asset('js/posts/create-edit.js') }}"></script>
@endsection
