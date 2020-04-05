@extends('layouts.master')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- MAIN -->
                <div id="main" class="col-md-10">
                    <div class="billing-details">
                        <div class="section-title">
                            <h4 class="title">BEĞENDİĞİM ÜRÜNLER</h4>
                        </div>
                        <!-- row -->
                        <div class="row">
                            @foreach($begenilen_urunler as $begen)
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="product product-single">
                                        <div class="product-thumb">
                                            <a href="{{ route('urun', $begen->urun ->slug) }}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> Hızlı Bakış</a>
                                            <img src="/uploads/urunler/{{$begen->urun->detay->urun_resmi}}" class="img-responsive" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h2 class="product-name"><a href="">{{$begen->urun->urun_adi}}</a></h2>
                                            <h3 class="product-price">{{$begen->urun->fiyat}}₺</h3>
                                            <div class="product-btns">

                                                <a href="{{route('begenilen-urunler.sil', ['id'=>$begen->id])}}" style="float: left" class="main-btn icon-btn"><i class="fa fa-times"></i></a>

                                                <form action="{{route('sepet.ekle')}}" method="post">
                                                    <input type="hidden" value="{{$begen->urun->id}}" name="id">
                                                    <input type="hidden" value="1" name="quantity">
                                                    @csrf
                                                    <button style="float: left" type="submit" value="Sepete Ekle" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                                </form>
                                            </div>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <!-- /row -->
                        </div>
                    <!-- /MAIN -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
@endsection
