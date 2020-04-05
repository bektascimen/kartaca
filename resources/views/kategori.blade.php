@extends('layouts.master')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- ASIDE -->
                <div id="aside" class="col-md-2">

                    <div class="aside">
                        <h3 class="aside-title">{{ $kategori->kategori_adi }}</h3>
                        <ul class="list-links">
                        @foreach($solKategoriler as $item)
                                <li><a href="{{ route('kategori', $item->slug) }}">
                                    {{ $item->kategori_adi }}
                                </a></li>
                        @endforeach
                        </ul>
                    </div>

                    <!-- aside widget -->
                    <div class="aside">
                    </div>
                </div>
                <!-- /ASIDE -->

                <!-- MAIN -->
                <div id="main" class="col-md-10">
                    <!-- store top filter -->
                    <div class="store-filter clearfix">
                        @if(count($urunler)>0)
                        <div class="pull-left">
                            <div class="row-filter">
                                <br>
                            </div>
                            <br>
                            <div class="sort-filter">
                            </div>
                        </div>

                            @endif
                    </div>
                    <!-- /store top filter -->

                    <!-- STORE -->
                    <div id="store">
                        <!-- row -->
                        <div class="row">
                            @if(count($urunler)==0)
                                <div class="col-md-12">Bu kategoride henüz ürün bulunmamaktadır.</div>
                            @endif
                            @foreach($urunler as $urun)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single">
                                    <div class="product-thumb">
                                        <a href="{{ route('urun', $urun->urun->slug) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Hızlı Bakış</a>
                                        <img src="/uploads/urunler/{{$urun->urun->detay->urun_resmi}}" alt="">
                                    </div>
                                    <div class="product-body">
                                        <h2 class="product-name"><a href="{{ route('urun', $urun->urun->slug) }}">{{ $urun ->urun-> urun_adi }}</a></h2>
                                        <h3 class="product-price">{{ $urun->urun->fiyat }}₺</h3>
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
                            @endforeach
                            <div class="clearfix visible-md visible-lg"></div>
                        <!-- /row -->
                    </div>
                        {{ $urunler->links() }}
                    <!-- /STORE -->
                </div>
                <!-- /MAIN -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

@endsection
