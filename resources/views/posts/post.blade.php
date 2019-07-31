<div class="post-content">
    <h2><a href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h2>

    <hr>

    <div class="post-info">
        <i class="fas fa-layer-group"></i>

        <p><a href="/posts/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        <p>|</p>

        <i class="fas fa-clock"></i>

        <p>{{ $post->created_at->toFormattedDateString() }}</p>

        <p>|</p>

        <i class="fas fa-user"></i>

        <p>Posted by: <a href="/user/{{ $post->user->id }}/posts">{{ $post->user->name }}</a></p>

        <p>|</p>

        <i class="fas fa-comment"></i>

        <p>{{ $post->comments->count() }}</p>
    </div>

    <div class="pst-cnt">{{ $post->content }}</div>
</div>
