<!-- Comment Section -->
<div id="comment-section">
    <!-- Comment form -->
    <form method="POST" action="/posts/{{ $post->slug }}/comments" name="comment" onsubmit="return validateForm()">
        @csrf

        <textarea rows="2" name="content" placeholder="Enter your comment" maxlength="500"></textarea>

        @include ('layouts.errors')

        <p id="val-info"></p>

        <input type="submit" value="Add Comment">
    </form>

    <!-- Display comments -->
    <ul>
        @foreach ($post->comments as $comment)
            <li>
                <div class="comment-content">
                    <p><strong>{{ $comment->created_at->diffForHumans() }}</strong> by <strong>{{ $comment->user_id }}</strong></p>

                    <p>{{ $comment->content }}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>
