@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix">
                    <div>
                        <div class="col-md-12">
                            <div class="order-summary clearfix">
                                <div class="section-title">
                                    <a href="{{route('siparisler')}}" class="primary-btn add-to-cart">
                                        <i class="fa fa-undo"></i> SİPARİŞLERE DÖN
                                    </a>
                                    <br>
                                    <br>
                                    <h3 class="title">SİPARİŞ (SP-{{$siparis->id}})</h3>
                                </div>
                                    <table class="shopping-cart-table table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-center">Ürün</th>
                                            <th class="text-center">BİRİm FİYATI</th>
                                            <th class="text-center">Adet</th>
                                            <th class="text-center">Toplam Ücret</th>
                                            <th class="text-center">Ödeme YÖntemİ</th>
                                        </tr>
                                        </thead>
                                        @foreach($siparis->sepet->sepet_urunler as $sepet_urun)
                                            <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 120px">
                                                    <a href="{{route('urun', $sepet_urun->urun->slug)}}">
                                                    <img src="/uploads/urunler/{{$sepet_urun->urun->detay->urun_resmi}}" class="img-responsive" style="width: 150px;">
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{route('urun', $sepet_urun->urun->slug)}}">
                                                        {{$sepet_urun->urun->urun_adi}}
                                                    </a>
                                                </td>
                                                <td class="price text-center">{{ $sepet_urun->fiyat}}₺</td>
                                                <td class="price text-center">{{ $sepet_urun->adet}}</td>
                                                <td class="price text-center">{{ $sepet_urun->fiyat * $sepet_urun->adet}}₺</td>
                                                <td class="text-center">{{ $siparis->odeme_yontemi}}</td>
                                            </tr>
                                            </tbody>
                                        @endforeach
                                        <tr>
                                            <th class="text-center">Toplam Tutar:</th>
                                            <th>{{ $siparis->siparis_tutari }}₺</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center">Sipariş Durumu:</th>
                                            <th>{{$siparis->durum}}</th>
                                        </tr>
                                    </table>
                            </div>
                        </div>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection
