@if (session('status'))
    <div id="message">
        {{ session('status') }}
        <span>&times;</span>
    </div>
@endif
