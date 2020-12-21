 <div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="http://127.0.0.1:8000" class="nav-item nav-link active">Home</a>
                    <a href="product" class="nav-item nav-link ">Products</a>
                    <a href="productdetail" class="nav-item nav-link">Product Detail</a>
                    <a href="cart" class="nav-item nav-link">Cart</a>
                    <a href="checkout" class="nav-item nav-link">Checkout</a>
                    <a href="myaccount" class="nav-item nav-link">My Account</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                        <div class="dropdown-menu">
                            <a href="wishlist" class="dropdown-item">Wishlist</a>
                           <!--  <a href="log" class="dropdown-item">Login & Register</a> -->
                            <a href="contact" class="dropdown-item">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav ml-auto">
                    @guest
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                        <div class="dropdown-menu">
                        <!--
                        <a href="{{('/register_login')}}" class="dropdown-item">Login</a>
                        <a href="{{('/register_login')}}" class="dropdown-item">Register</a> -->


                        <a class="nav-link" href="loginform">{{ __('Login') }}</a>

                        @if (Route::has('register'))

                        <a class="nav-link" href="registerform">{{ __('Register') }}</a>

                        @endif
                        @else

                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                @endguest
            </div>
        </div>
    </div>
</div>
</nav>

</div>
</div>