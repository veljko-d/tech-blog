<!-- Comment Section -->
<div id="comment-section">
    @include ('layouts.errors')

    <p id="val-info"></p>

    <form method="POST" action="/posts/{{ $post->slug }}/comments" name="comment" onsubmit="return validateForm()">
        @csrf

        <textarea rows="2" name="content" placeholder="Enter your comment" maxlength="500"></textarea>

        <input type="submit" value="Add Comment">
    </form>

    <ul>
        @foreach ($post->comments as $comment)
            <li>
                <strong>{{ $comment->created_at->diffForHumans() }}</strong>
                by <strong>{{ $comment->user_id }}</strong>: &nbsp;

                {{ $comment->content }}
            </li>
        @endforeach
    </ul>
</div>
