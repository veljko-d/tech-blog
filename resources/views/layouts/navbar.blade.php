<nav class="topnav" id="myTopnav">
    <!-- LEFT -->
    <a href="{{ url('/') }}"><i class='fas fa-home'></i></a>

    <a href="{{ route('posts.index') }}"><i class='fas fa-newspaper'></i> Posts</a>

    <a href="#"><i class='fas fa-images'></i> Gallery</a>

    @auth
        <!-- DROPDOWN: MY -->
        <div class="l-nav dropdown" id="ddn1">
            <button class="dropbtn">
                My <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-content">
                <a href="/user/{{ Auth::user()->id }}/posts">
                    <i class='fas fa-newspaper'></i> Posts
                </a>

                <a href="/#">
                    <i class='fas fa-images'></i> Gallery
                </a>
            </div>
        </div>

        <!-- DROPDOWN: NEW -->
        <div class="l-nav dropdown" id="ddn2">
            <button class="dropbtn">
                New <i class="fa fa-caret-down"></i>
            </button>

            <div class="dropdown-content">
                <a href="{{ route('posts.create') }}" >
                    <i class='fas fa-sticky-note'></i> Post
                </a>

                <a href="/#">
                    <i class='fas fa-image'></i> Image
                </a>
            </div>
        </div>
    @endauth

    <!-- SEARCH -->
    <div class="l-nav search-container">
        <form action="/search" method="get">
            <input type="search" placeholder="Search" name="title">

            <button type="submit"><i class='fas fa-search'></i></button>
        </form>
    </div>

    <!-- RIGHT -->
    <div class="r-nav">
        @auth
            <!-- DROPDOWN: USER -->
            <div class="dropdown" id="ddn3">
                <button class="dropbtn">
                    <i class='fas fa-user'></i>
                        {{ Auth::user()->name }}
                    <i class='fas fa-caret-down'></i>
                </button>

                <div class="dropdown-content">
                    <a href="/users/{{ Auth::user()->slug }}">
                        <i class='fas fa-id-card'></i> {{ __('Profile') }}
                    </a>

                    <div>
                        <a onclick="document.getElementById('logout-form').submit()">
                            <i class='fas fa-sign-out-alt'></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        @else
            <a href="{{ route('register') }}">
                <i class='fas fa-user-plus'></i> {{ __('Register') }}
            </a>

            <a href="{{ route('login') }}">
                <i class='fas fa-sign-in-alt'></i> {{ __('Login') }}
            </a>
        @endauth
    </div>

    <!-- COLLAPSE NAVBAR BUTTON -->
    <a href="javascript:void(0);" class="trigram"
        onclick="collapseNav()">&#9776;
    </a>
</nav>
