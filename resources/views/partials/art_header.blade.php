@section('css')
    <style>

    </style>
@endsection

<header class="app2 loding-header nav-abs custom-scroll">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav>
                    <a class="m-r-auto" href="{{ url('/') }}">
                        <img class="img-fluid" src="{{ asset('assets/images/logo/en_art.png') }}" alt="logo" id="logo">
                    </a>
                    <div class="responsive-btn">
                        <a class="toggle-nav" href="#">
                            <i aria-hidden="true" class="fa fa-bars text-black"></i>
                        </a>
                    </div>
                    <div class="navbar m-l-auto" id="togglebtn">
                        <div class="responsive-btn">
                            <a class="btn-back" href="#">
                                <h5>back</h5>
                            </a>
                        </div>
                        <ul class="main-menu">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/dev') }}">Dev</a></li>
                            <li><a href="{{ url('/art') }}">Art</a></li>
                            <li><a href="{{ url('/store') }}">Store</a></li>

                            @guest
                                <li><a href="{{ url('/login') }}">Login</a></li>
                            @else
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                <li><a id="navbarDropdown" role="button" class="dropdown" aria-haspopup="true" v-pre href="#">Welcome, {{ Auth::user()->name }}</a>
                                    <ul>
                                        <!--li>
                                            <a href="{{ url('profile') }}" style="color: #32185d">
                                                {{ __('Profile') }}
                                            </a>
                                        </li-->
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                </li>
                            @endif

                            @php
                                $langs = ['en' => 'English','fr' => 'Français','ar' => 'Arabic'];
                                $side = App::getLocale() == 'ar' ? "left" : "right";
                            @endphp

                            <li style="padding: 0 10px"><a><img style="padding-{{ $side }}: 20px" class="img-fluid" src="{{ asset('assets/images/buddy/city/'.App::getLocale().'.png') }}" alt="English">{{ $langs[App::getLocale()] }}</a></span>
                                <ul style="width: 140px; padding-top: 10px">
                                    @foreach ($langs as $lang => $language)
                                        @if ($lang != App::getLocale())
                                            <li>
                                                <a class="m-r-auto" href="{{route('switchLan', $lang)}}">
                                                    <img style="padding-right: 20px" class="img-fluid" src="{{ asset('assets/images/buddy/city/'.$lang.'.png') }}" alt="English">{{$language}}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Nav end-->

@section('js')
<script type="text/javascript">

</script>
@endsection
