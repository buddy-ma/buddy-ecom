@extends('layouts.app')
@section('title', 'Welcome')
@section('css')
    @php $ar = App::getLocale() == 'ar' ? '_ar' : ''; @endphp
    <link href="{{ asset('assets/css/inner-page.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/buddy'.$ar.'.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

    <!--breadcrumb section start -->
    <section class="breadcrumb-section-main inner-2 breadcrumb-section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain ">
                        <div>
                            <h2 class="breadcrumb-txt">{{ $data['category']->name }}</h2>
                        </div>
                        <div>
                            {{-- <ul>
                                <li><a href="#">shop categories</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>three grid</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--breadcrumb section end -->

    <!-- section start -->
    <section>
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 collection-filter">
                        <!-- side-bar colleps block stat -->
                        <div class="collection-filter-block">
                            <!-- brand filter start -->
                            <div class="collection-mobile-back">
                                <span class="filter-back">
                                    <i aria-hidden="true" class="fa fa-angle-left"></i> back
                                </span>
                            </div>
                            <div class="collection-collapse-block open">
                                @livewire('catalog')
                                <h3 class="collapse-block-title">brand</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="zara" type="checkbox">
                                            <label class="custom-control-label" for="zara">zara</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="vera-moda" type="checkbox">
                                            <label class="custom-control-label" for="vera-moda">vera-moda</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="forever-21" type="checkbox">
                                            <label class="custom-control-label" for="forever-21">forever-21</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="roadster" type="checkbox">
                                            <label class="custom-control-label" for="roadster">roadster</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="only" type="checkbox">
                                            <label class="custom-control-label" for="only">only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- color filter start here -->
                            <div class="collection-collapse-block open">
                                <h3 class="collapse-block-title">colors</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="color-selector">
                                        <ul>
                                            <li class="color-1 active"></li>
                                            <li class="color-2"></li>
                                            <li class="color-3"></li>
                                            <li class="color-4"></li>
                                            <li class="color-5"></li>
                                            <li class="color-6"></li>
                                            <li class="color-7"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- price filter start here -->
                            <div class="collection-collapse-block border-0 open">
                                <h3 class="collapse-block-title">price</h3>
                                <div class="collection-collapse-block-content">
                                    <div class="collection-brand-filter">
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="hundred" type="checkbox">
                                            <label class="custom-control-label" for="hundred">$10 - $100</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="twohundred" type="checkbox">
                                            <label class="custom-control-label" for="twohundred">$100 - $200</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="threehundred" type="checkbox">
                                            <label class="custom-control-label" for="threehundred">$200 - $300</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="fourhundred" type="checkbox">
                                            <label class="custom-control-label" for="fourhundred">$300 - $400</label>
                                        </div>
                                        <div class="custom-control custom-checkbox collection-filter-checkbox">
                                            <input class="custom-control-input" id="fourhundredabove" type="checkbox">
                                            <label class="custom-control-label" for="fourhundredabove">$400 above</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- silde-bar colleps block end here -->
                        <!-- side-bar single product slider start -->
                        <div class="theme-card">
                            <h5 class="title-border">new products</h5>
                            <div class="offer-slider slide-1">
                                @include('product.new_products')
                            </div>
                        </div>
                        <!-- side-bar single product slider end -->
                        <!-- side-bar banner start here -->

                        <!-- side-bar banner end here -->
                    </div>
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#">
                                            <img alt="" class="img-fluid" src="{{ $data['category']->banner ?? '../assets/images/inner-page/banner.jpg' }}"></a>
                                        <div class="top-banner-content small-section">
                                            <h4>{{ $data['category']->name }}</h4>
                                            <h5>{{ $data['category']->title ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.' }}.</h5>
                                            <p>
                                                {{ $data['category']->descriptionn ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem Ipsum has been the industry\'s standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book. It has survived not only five centuries, but also
                                                the leap into electronic typesetting, remaining essentially unchanged. It
                                                was popularised in the 1960s with the release of Letraset sheets containing
                                                Lorem Ipsum passages, and more recently with desktop publishing software
                                                like Aldus PageMaker including versions of Lorem Ipsum.' }}..
                                            </p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="filter-main-btn">
                                                        <span class="filter-btn btn btn-default primary-btn radius-0">
                                                            <i aria-hidden="true" class="fa fa-filter"></i> Filter
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="product-filter-content">
                                                        <div class="search-count">
                                                            <h5>Showing Products 1-24 of 10 Result</h5></div>
                                                        <div class="collection-view">
                                                            <ul>
                                                                <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="collection-grid-view">
                                                            <ul>
                                                                <li><img alt="" class="product-2-layout-view"
                                                                        src="../assets/images/inner-page/icon/2.png"></li>
                                                                <li><img alt="" class="product-3-layout-view"
                                                                        src="../assets/images/inner-page/icon/3.png"></li>
                                                                <li><img alt="" class="product-4-layout-view"
                                                                        src="../assets/images/inner-page/icon/4.png"></li>
                                                                <li><img alt="" class="product-6-layout-view"
                                                                        src="../assets/images/inner-page/icon/6.png"></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product-page-per-view">
                                                            <select>
                                                                <option value="High to low">24 Products Par Page</option>
                                                                <option value="Low to High">50 Products Par Page</option>
                                                                <option value="Low to High">100 Products Par Page</option>
                                                            </select>
                                                        </div>
                                                        <div class="product-page-filter">
                                                            <select>
                                                                <option value="High to low">Sorting items</option>
                                                                <option value="Low to High">50 Products</option>
                                                                <option value="Low to High">100 Products</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid product-load-more">
                                            <div class="row">
                                                @foreach ($data['products'] as $product)
                                                    @php
                                                        $trimmed = trim($product->image, ".png|.png|.jpeg");
                                                        $filename = $product->image;
                                                        $newFileName = substr($filename, 0 , (strrpos($filename, ".")));
                                                        $pos = strpos($filename, "png");
                                                        if($pos==True)
                                                            $extension="png";
                                                        $extension="jpeg";
                                                        $title = Str::limit($product->name, 10);
                                                        $price = round($product->price, 2);
                                                    @endphp
                                                    <div class="col-xl-4 col-md-6 col-grid-box three">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="{{ route('product', $product->product_id) }}">
                                                                        <img alt="" class="img-fluid" src="https://www.ariba.ma/image/{{ $filename }}">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="{{ route('product', $product->product_id) }}">
                                                                        <img alt=""
                                                                            class="img-fluid" src="https://www.ariba.ma/image/{{ $filename }}">
                                                                    </a>
                                                                </div>
                                                                <div class="cart-info cart-wrap">
                                                                    <a href="#" title="Add to cart">
                                                                        <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                                                                    </a>
                                                                    <a href="javascript:void(0)" title="Add to Wishlist">
                                                                        <i aria-hidden="true" class="fa fa-heart-o"></i>
                                                                    </a>
                                                                    <a data-bs-target="#quick-view" data-bs-toggle="modal" href="#"
                                                                    title="Quick View">
                                                                        <i aria-hidden="true" class="fa fa-search"></i>
                                                                    </a>
                                                                    <a href="compare.html" title="Compare">
                                                                        <i aria-hidden="true" class="fa fa-refresh"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-detail">
                                                                <div>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <a href="{{ route('product', $product->product_id) }}"><h6>{{ $title }}</h6></a>
                                                                    <p>{{ $product->description }}</p>
                                                                    <h4>${{ $price }}</h4>
                                                                    <ul class="color-variant">
                                                                        <li class="bg-light0"></li>
                                                                        <li class="bg-light1"></li>
                                                                        <li class="bg-light2"></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="load-more-sec"><a class="loadMore" href="javascript:void(0)">load
                                            more</a>
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
    <!-- section End -->

@endsection
@section('js')
    <script src="{{ asset('assets/js/category.js') }}"></script>
@endsection
