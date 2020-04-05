@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="products bg-content">
            <div class="row">
                @if(count($urunler)==0)
                    <div class="col-md-12 text-center">
                        Bir ürün bulunamadı.
                    </div>
                @endif
                @foreach($urunler as $urun)
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Hızlı Bakış</button>
                                    <img src="/uploads/urunler/{{$urun->detay->urun_resmi}}" class="img-responsive" alt="">
                                </div>
                                <div class="product-body">
                                    <h2 class="product-name"><a href="{{ route('urun', $urun->slug) }}">{{ $urun -> urun_adi }}</a></h2>
                                    <h3 class="product-price">{{ $urun->fiyat }}₺</h3>
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
            </div>
            {{ $urunler -> appends(['aranan' => old('aranan')]) -> links() }}
        </div>
    </div>
@endsection
