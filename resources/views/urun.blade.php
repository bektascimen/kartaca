@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!--  Product Details -->
                <div class="product product-details clearfix">
                    <div class="col-md-6">
                        <div id="product-main-view" style="width: 348px; padding-left: 20px;">
                            <div class="product-view">
                                <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="product-body">
                                <h2 class="product-name">{{ $urun->urun_adi }}</h2>
                                <h3 class="product-price">
                                @if($urun->indirimli_fiyat!=null)
                                    {{ $urun->indirimli_fiyat }}₺
                                    @else
                                    {{ $urun->fiyat }}₺
                                    @endif
                                </h3>
                                <p><strong>Stok Durumu:</strong> Stokta var.</p>
                                <p><strong>Tedarikçi:</strong> {{$urun->isletmeAdi->isletme_adi}}</p>
                                <p>{{ $urun->aciklama }}</p>
                                <div class="product-options">
                                </div>

                                <div class="product-btns">
                                    <form action="{{route('sepet.ekle')}}" method="post">
                                        <input type="hidden" name="id" value="{{$urun->id}}">
                                        {{ csrf_field() }}
                                    <div class="qty-input">
                                        <span class="text-uppercase">Adet: </span>
                                        <input class="input" type="number" name="quantity" min="0">
                                    </div>
                                    <button type="submit" value="Sepete Ekle" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
                                    </form>
                                    <div class="pull-right">

                                        <form action="{{route('begenilen-urunler.ekle')}}" method="post">
                                            <input type="hidden" value="{{$urun->id}}" name="urun_id">
                                            @csrf
                                            <button style="float: left" type="submit" class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
        <br>
        <br>

@endsection
