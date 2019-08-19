<div class="col-auto">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('product.index') }}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/shopping-cart">
                        <i class="fas fa-shopping-cart"></i> Shopping Cart
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user"></i>
                        UserAccount</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(Auth::check())
                            <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                        @else
                            <a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>
                            <a class="dropdown-item" href="{{ route('user.signin') }}">Sign In</a>
                        @endif
                    </div>
                </li>
            </di>
        </div>
    </nav>

</div>
