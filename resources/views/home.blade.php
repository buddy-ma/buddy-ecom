@extends('layouts.app')
@section('title', 'Welcome')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="{{ asset('assets/css/color-7.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy'.$ar.'.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

<div class="layout-ecommerce">

    <section class="ecommerce ecommerce-home">
        <div class="ecommerce-home-slider owl-carousel owl-theme">
            <div class="item">
                <img alt="#" class="bg-img" src="../assets/images/ecommerce/1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-sm-8">
                            <div class="contain">
                                <div>
                                    <h1>Exclusive Offer</h1>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system.</p>
                                    <a class="btn btn-default primary-btn  radius-0" href="#">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img alt="#" class="bg-img" src="../assets/images/ecommerce/2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-sm-8">
                            <div class="contain">
                                <div>
                                    <h1>Big collection</h1>
                                    <p>I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system.</p>
                                    <a class="btn btn-default primary-btn  radius-0" href="#">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ecommerce collection">
        <div class="container">
            <div class="row banner-three">
                @foreach ($data['top_cats'] as $cats)
                    @php
                        $trimmed = trim($cats->image, ".png|.png|.jpeg");
                        $filename = $cats->image;
                        $newFileName = substr($filename, 0 , (strrpos($filename, ".")));
                        $pos = strpos($filename, "png");
                        if($pos==True)
                            $extension="png";
                        $extension="jpeg";
                        $title = Str::limit($cats->name, 10);
                    @endphp
                    <div class="col-md-4">
                        <div class="main-wrapper">
                            <img alt="{{$cats->name}}" class="bg-img" src="https://www.ariba.ma/image/{{$cats->image}}">
                            <div class="banner-contain">
                                <a class="btn btn-default primary-btn  radius-0" href="{{ route('category', ['id' => $cats->category_id]) }}">{{$cats->name}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ecommerce feature-product">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="title title2">
                        <div class="sub-title">
                            <div>
                                <h2 class="title-text">{{ __('home.newest') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- 5 Top Sales Product --}}
                <div class="col-sm-12">
                    <div class="product-slider owl-carousel owl-theme">
                        @foreach ($data['newest_products'] as $new_p)

                            <div class="item">
                                <div class="product-box">
                                    <a class="badge badge-success"> New </a>
                                    <div class="img-wrapper">
                                        @php
                                            $trimmed = trim($new_p->image, ".png|.png|.jpeg");
                                            $filename = $new_p->image;
                                            $newFileName = substr($filename, 0 , (strrpos($filename, ".")));
                                            $pos = strpos($filename, "png");
                                            if($pos==True)
                                                $extension="png";
                                            $extension="jpeg";
                                            $title = Str::limit($new_p->name, 20);
                                            $price = round($new_p->price, 2);
                                        @endphp
                                        <div class="front">
                                            <a href="#"><img alt="" class="img-fluid" src="https://www.ariba.ma/image/{{$filename}}"></a>
                                        </div>
                                        <div class="back">
                                            <a href="#"><img alt="" class="img-fluid" src="https://www.ariba.ma/image/{{$new_p->image}}"></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <a href="#" title="Add to cart"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                                            <a href="javascript:void(0)" title="Add to Wishlist"><i aria-hidden="true" class="fa fa-heart-o"></i></a>
                                            <a data-bs-target="#quick-view" data-bs-toggle="modal" href="#" title="Quick View"><i
                                                aria-hidden="true" class="fa fa-search"></i></a>
                                            <a href="compare.html" title="Compare"><i aria-hidden="true" class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a href="product-page(no-sidebar).html"><h6>{{$title}}</h6></a>
                                        <h4>${{$price}}</h4>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="full-banner">
                        <img alt="full banner" class="bg-img" src="../assets/images/ecommerce/full-banner.jpg">
                    </div>
                </div>
                <div class="container">
                    <div class="banner-contain">
                        <div>
                            <h2>Creative Collection</h2>
                            <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system.</p>
                            <a class="btn btn-default primary-btn  radius-0 mt-3" href="#">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ecommerce-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="title title2">
                        <div class="sub-title">
                            <div>
                                <h2 class="title-text">{{ __('home.special') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 filter-section">
                    <div class="filter-container isotopeFilters">
                        {{-- Top 5 Categories --}}
                        {{-- Limit in 16 / 8 each Category --}}
                        <ul class="list-inline filter">
                            <li class="active"><a data-filter=".all" href="#">All</a></li>
                            @foreach ($data['special_cats'] as $s_cat)
                                <li><a data-filter=".{{$s_cat->category_id}}" href="#">{{$s_cat->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="isotopeContainer row">
                @foreach ($data['special_products'] as $sp)
                    @php
                        $trimmed = trim($sp->image, ".png|.png|.jpeg");
                        $filename = $sp->image;
                        $newFileName = substr($filename, 0 , (strrpos($filename, ".")));
                        $pos = strpos($filename, "png");
                        if($pos==True)
                            $extension="png";
                        $extension="jpeg";
                        $title = Str::limit($sp->name, 20);
                        $price = round($sp->price, 2);
                    @endphp
                    @if ($loop->index < 12)
                        <div class="col-lg-3 col-sm-6 isotopeSelector {{$sp->category_id}} all">
                            <div class="product-box">
                                <a class="badge badge-success" href="#">On sale</a>
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img alt="" class="img-fluid"
                                                        src="https://www.ariba.ma/image/{{$filename}}"></a>
                                    </div>
                                    <div class="back">
                                        <a href="#"><img alt="" class="img-fluid"
                                                        src="https://www.ariba.ma/image/{{$filename}}"></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <a href="#" title="Add to cart"><i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i aria-hidden="true"
                                                                                                class="fa fa-heart-o"></i></a> <a
                                            data-bs-target="#quick-view" data-bs-toggle="modal" href="#" title="Quick View"><i
                                            aria-hidden="true" class="fa fa-search"></i></a> <a href="compare.html"
                                                                                                title="Compare"><i
                                            aria-hidden="true" class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a href="product-page(no-sidebar).html"><h6>{{$title}}</h6></a>
                                    <h4>${{$price}}</h4>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-3 col-sm-6 isotopeSelector {{$sp->category_id}}">
                            <div class="product-box">
                                <a class="badge badge-success" href="#">On sale</a>
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="#"><img alt="" class="img-fluid"
                                                        src="https://www.ariba.ma/image/{{$filename}}"></a>
                                    </div>
                                    <div class="back">
                                        <a href="#"><img alt="" class="img-fluid"
                                                        src="https://www.ariba.ma/image/{{$filename}}"></a>
                                    </div>
                                    <div class="cart-info cart-wrap">
                                        <a href="#" title="Add to cart"><i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                        </a>
                                        <a href="javascript:void(0)" title="Add to Wishlist"><i aria-hidden="true"
                                                                                                class="fa fa-heart-o"></i></a> <a
                                            data-bs-target="#quick-view" data-bs-toggle="modal" href="#" title="Quick View"><i
                                            aria-hidden="true" class="fa fa-search"></i></a> <a href="compare.html"
                                                                                                title="Compare"><i
                                            aria-hidden="true" class="fa fa-refresh"></i></a></div>
                                </div>
                                <div class="product-detail">
                                    <a href="product-page(no-sidebar).html"><h6>{{$title}}</h6></a>
                                    <h4>${{$price}}</h4>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="down-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="small-banner">
                        <img alt="full banner" class="bg-img" src="../assets/images/ecommerce/full-banner2.jpg">
                    </div>
                </div>
                <div class="container">
                    <div class="banner-contain">
                        <div>
                            <h3>Buy it and get 50% discount</h3>
                            <a class="btn btn-default primary-btn  radius-0 mt-3" href="#">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8">
                    <div class="title title2">
                        <div class="sub-title">
                            <div>
                                <h2 class="title-text">{{ __('home.story') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="agency blog blog-sec">
                        <div class="blog-slider owl-carousel owl-theme">
                            <div class="item">
                                <div class="blog-agency">
                                    <div class="blog-contain">
                                        <img alt="" class="img-fluid" src="../assets/images/agency/blog/23.png">
                                        <div class="img-container center-content">
                                            <div class="center-content">
                                                <div class="blog-info">
                                                    <div class="m-b-20">
                                                        <div class="center-text">
                                                            <i aria-hidden="true" class="fa fa-clock-o m-r-10"></i>
                                                            <h6 class="m-r-25 font-blog">June 19, 2019</h6>
                                                            <i aria-hidden="true" class="fa fa-map-marker m-r-10"></i>
                                                            <h6 class="font-blog">Phonics ,Newyork</h6>
                                                        </div>
                                                    </div>
                                                    <h5 class="blog-head font-600">Twice profit than before you</h5>
                                                    <p class="para2">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been.
                                                    </p>
                                                    <div class="btn-bottom m-t-20">
                                                        <a class="text-uppercase" href="#">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-agency">
                                    <div class="blog-contain">
                                        <img alt="" class="img-fluid" src="../assets/images/agency/blog/12.jpg">
                                        <div class="img-container center-content">
                                            <div class="center-content">
                                                <div class="blog-info">
                                                    <div class="m-b-20">
                                                        <div class="center-text">
                                                            <i aria-hidden="true" class="fa fa-clock-o m-r-10"></i>
                                                            <h6 class="m-r-25 font-blog">June 19, 2019</h6>
                                                            <i aria-hidden="true" class="fa fa-map-marker m-r-10"></i>
                                                            <h6 class="font-blog">Phonics ,Newyork</h6>
                                                        </div>
                                                    </div>
                                                    <h5 class="blog-head font-600">Twice profit than before you</h5>
                                                    <p class="para2">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been.
                                                    </p>
                                                    <div class="btn-bottom m-t-20">
                                                        <a class="text-uppercase" href="#">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="blog-agency">
                                    <div class="blog-contain">
                                        <img alt="" class="img-fluid" src="../assets/images/agency/blog/10.jpg">
                                        <div class="img-container center-content">
                                            <div class="center-content">
                                                <div class="blog-info">
                                                    <div class="m-b-20">
                                                        <div class="center-text">
                                                            <i aria-hidden="true" class="fa fa-clock-o m-r-10"></i>
                                                            <h6 class="m-r-25 font-blog">June 19, 2019</h6>
                                                            <i aria-hidden="true" class="fa fa-map-marker m-r-10"></i>
                                                            <h6 class="font-blog">Phonics ,Newyork</h6>
                                                        </div>
                                                    </div>
                                                    <h5 class="blog-head font-600">Twice profit than before you</h5>
                                                    <p class="para2">
                                                        Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been.
                                                    </p>
                                                    <div class="btn-bottom m-t-20">
                                                        <a class="text-uppercase" href="#">read more</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
@section('js')
    <script src="{{ asset('assets/js/portfolio.js') }}"></script>
    <script src="{{ asset('assets/js/ecommerce.js') }}"></script>
@endsection
