@section('css')
    <style>
        .top-header-right li a img {
            width: 16px;
            height: 16px;
            display: block;
        }
    </style>
@endsection

<header class="ecommerce nav-fix" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav>
                    <a class="logo-erapper" href="#"><img alt="" class="img-fluid" src="{{ asset('assets/images/logo/logo.png') }}"></a>
                    <div class="responsive-btn"><a class="toggle-nav" href="#"><i aria-hidden="true" class="fa fa-bars"></i></a></div>
                    <div class="navbar" id="togglebtn">
                        <div class="responsive-btn">
                            <h5 class="btn-back">back</h5>
                        </div>
                         <ul class="main-menu">
                            <li><a href="{{ url('/') }}">{{ __('home.nav1') }}</a></li>
                            <li><a class="dropdown">{{ __('home.nav2') }}</a>
                                <ul style="box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;">
                                    @foreach ($data['all_cats'] as $cat)
                                        <li><a href="{{ route('category', ['id' => $cat->category_id]) }}">{{$cat->name}}</a></li>
                                    @endforeach

                                    {{-- <li class="sub-menu"><a class="sub-menu-title" href="#">Category with subs</a>
                                        <ul>
                                            <li><a>Sub1</a></li>
                                            <li><a>Sub2</a></li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </li>
                            <li><a href="{{ url('/art') }}">{{ __('home.nav3') }}</a></li>
                            <li><a href="{{ url('/store') }}">{{ __('home.nav4') }}</a></li>
                        </ul>
                    </div>
                    <div class="top-header-right">
                        <ul>
                            <li class="search">
                                <a aria-expanded="false" data-bs-toggle="dropdown" href="#" id="dropdownMenuButton">
                                    <i class="icon-search"></i>
                                </a>
                                <div aria-labelledby="dropdownMenuButton" class="dropdown-menu dropdown-menu-right">
                                    <form class="row g-3 align-items-center search-form">
                                        <div class="form-group">
                                            <input class="form-control-plaintext" placeholder="Search...."
                                                   type="search">
                                            <span class="d-sm-none mobile-search"></span>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="cart">
                                <a aria-expanded="false" data-bs-toggle="dropdown" href="#" id="dropdownMenuButton1">
                                    <i class="icon-shopping-cart-full"></i>
                                </a>
                                <div aria-labelledby="dropdownMenuButton1" class="dropdown-menu dropdown-menu-right">
                                    <ul class="shopping-cart">
                                        <li>
                                            <div class="media">
                                                <a href="#"><img alt="Generic placeholder image"
                                                                 class="me-3"
                                                                 src="../assets/images/inner-page/category/1.jpg"></a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h5>item name</h5>
                                                    </a>
                                                    <h5><span>1 x $ 299.00</span></h5>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i aria-hidden="true"
                                                                                     class="fa fa-times"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="total">
                                                <h5>subtotal : <span>$299.00</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="buttons"><a class="view-cart" href="cart.html">view cart</a> <a
                                                    class="checkout" href="#">checkout</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            @guest
                                <li class="account">
                                    <a aria-expanded="false" data-bs-toggle="dropdown" href="#" id="dropdownMenuButton2">
                                        <i class="icon-user"></i>
                                    </a>
                                    <div aria-labelledby="dropdownMenuButton2" class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('/login') }}">Login</a>
                                        <hr>
                                        <a class="dropdown-item" href="{{ url('/register') }}">Register</a>
                                        <a class="dropdown-item" href="{{ url('/wishlist') }}">Wishlist</a>
                                    </div>
                                </li>
                            @else
                                <li class="account">
                                    <a aria-expanded="false" data-bs-toggle="dropdown" href="#" id="dropdownMenuButton2">
                                        <i class="icon-user"></i>
                                    </a>
                                    <div aria-labelledby="dropdownMenuButton2" class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ url('/account') }}">Account</a>
                                        <a class="dropdown-item" href="{{ url('/wishlist') }}">Wishlist</a>
                                        <hr>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest

                            @php
                                $langs = ['en' => 'English','fr' => 'Français','ar' => 'Arabic'];
                                $side = App::getLocale() == 'ar' ? "left" : "right";
                            @endphp
                            <li>
                                <a aria-expanded="false" data-bs-toggle="dropdown" href="#" id="dropdownMenuButton2">
                                    <i class="flag flag-{{App::getLocale()}}"></i>
                                    {{-- <img class="flag img-fluid" src="{{ asset('assets/images/buddy/city/'.App::getLocale().'.png') }}" alt="English"> --}}
                                </a>
                                <div aria-labelledby="dropdownMenuButton2" class="dropdown-menu dropdown-menu-right">
                                    @foreach ($langs as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <a class="dropdown-item" href="{{route('switchLan', $lang)}}">
                                                <i style="margin-{{$side}}: 20px" class="flag flag-{{$lang}}"></i>{{$language}}
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

@section('js')
<script type="text/javascript">

</script>
@endsection
