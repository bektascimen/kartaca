@extends('layouts.master')
@section('content')
    @include('partials.alert')
    <!-- HOME -->
    <div id="home">
        <!-- container -->
        <div class="container">
            <!-- home wrap -->
            <div class="home-wrap">
                <!-- home slick -->
                <div id="home-slick">
                    @foreach($urunlerSlider as $index => $urun)
                    <!-- banner -->
                    <div class="banner banner-1">
                        <a href="{{route('urun', $urun -> slug)}}">
                            <img src="/uploads/slider/{{$urun->detay->slider_resmi}}" class="img-responsive">
                        </a>
                    </div>
                    <!-- /banner -->
                    @endforeach
                </div>
                <!-- /home slick -->
            </div>
            <!-- /home wrap -->
        </div>
        <!-- /container -->
    </div>
    <!-- /HOME -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">KAMPANYALI SEPETLER</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                @foreach($urunGununFirsati as $urun)
                <!-- banner -->
                <div class="col-sm-3">
                    <div class="banner banner-1">
                        <a href="{{route('urun', $urun -> slug)}}">
                            <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
                <!-- /banner -->
                @endforeach
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">İNDİRİMLİ ÜRÜNLER</h2>
                    </div>
                </div>
                <!-- section title -->
            @foreach($urunlerIndirimli as $urun)
                <!-- Product Single -->
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span class="sale">-{{(100-(($urun->indirimli_fiyat)*100)/($urun->fiyat))}}%</span>
                                </div>
                                <a href="{{ route('urun', $urun ->slug) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Hızlı Bakış</a>
                                    <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" class="img-responsive" alt="">
                            </div>
                            <div class="product-body">
                                @if($urun->indirimli_fiyat!=null)
                                <h3 class="product-price">{{$urun -> indirimli_fiyat }}₺ <del class="product-old-price">{{$urun -> fiyat }}₺</del></h3>
                                @else
                                <h3 class="product-price">{{$urun -> fiyat }}₺ </h3>
                                @endif
                                    <h2 class="product-name"><a href="{{ route('urun', $urun -> slug) }}">{{ $urun -> urun_adi }}</a></h2>
                                <div class="product-btns">


                                    <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                        <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                        @csrf
                                    <button style="float: left" type="submit" class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    </form>


                                    <form action="{{route('sepet.ekle')}}" method="post">
                                        <input type="hidden" value="{{$urun->id}}" name="id">
                                        <input type="hidden" value="1" name="quantity">
                                        @csrf
                                        <button style="float: left" type="submit" value="Sepete Ekle" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                    </form>

                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Product Single -->
                @endforeach
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section-title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Öne Çıkan Ürünler</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-1 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->

                <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6 hidden-xs hidden-sm">
                    <div class="banner banner-2">
                        <img src="/img/2.jpg" style="max-height: 100%" alt="">
                    </div>
                </div>
                <!-- /banner -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-1" class="product-slick">
                            <!-- Product Single -->
                            @foreach($urunlerOneCikan as $urun)
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{ route('urun', $urun ->slug) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Hızlı Bakış</a>
                                        <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" class="img-responsive" alt="">

                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$urun -> fiyat }}₺ </h3>
                                        <h2 class="product-name"><a href="{{ route('urun', $urun -> slug) }}">{{ $urun -> urun_adi }}</a></h2>
                                        <div class="product-btns">

                                            <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                                <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                                @csrf
                                                <button style="float: left" type="submit" class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            </form>
                                            <form action="{{route('sepet.ekle')}}" method="post">
                                                <input type="hidden" value="{{$urun->id}}" name="id">
                                                <input type="hidden" value="1" name="quantity">
                                                @csrf
                                                <button style="float: left" type="submit" value="Sepete Ekle" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                            <br><br>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        <!-- /Product Single -->
                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
        </div>
    </div>
    <!-- /section -->

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- section-title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="title">Çok Satan Ürünler</h2>
                        <div class="pull-right">
                            <div class="product-slick-dots-2 custom-dots"></div>
                        </div>
                    </div>
                </div>
                <!-- /section-title -->

                <!-- banner -->
                <div class="col-md-3 col-sm-6 col-xs-6 hidden-xs hidden-sm">
                    <div class="banner banner-2">
                        <img src="/img/3.jpg" alt="">
                    </div>
                </div>
                <!-- /banner -->

                <!-- Product Slick -->
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <div class="row">
                        <div id="product-slick-2" class="product-slick">
                            <!-- Product Single -->
                            @foreach($urunlerCokSatan as $urun)
                            <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{ route('urun', $urun ->slug) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Hızlı Bakış</a>
                                        <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" class="img-responsive" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h3 class="product-price">{{$urun -> fiyat }}₺ </h3>
                                        <h2 class="product-name"><a href="{{ route('urun', $urun -> slug) }}">{{ $urun -> urun_adi }}</a></h2>
                                        <div class="product-btns">

                                            <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                                <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                                @csrf
                                                <button style="float: left" type="submit" class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                            </form>

                                            <form action="{{route('sepet.ekle')}}" method="post">
                                                <input type="hidden" value="{{$urun->id}}" name="id">
                                                <input type="hidden" value="1" name="quantity">
                                                @csrf
                                                <button style="float: left" type="submit" value="Sepete Ekle" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                            </form>
                                            <br><br>

                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        <!-- /Product Single -->
                        </div>
                    </div>
                </div>
                <!-- /Product Slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /row -->
    </div>
    <!-- /section -->

    @endsection
