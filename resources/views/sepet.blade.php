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
                            @if(!auth()->user())
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <p class="lead">Giriş yapmadan sipariş veremezsiniz.</p>
                                    </div>
                                </div>
                            @endif
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Sepet</h3>
                                @include('partials.alert')
                            </div>
                            @if(count(Cart::getContent())>0)
                            <table class="shopping-cart-table table">
                                <thead>
                                <tr>
                                    <th>Ürün</th>
                                    <th></th>
                                    <th class="text-center">Ücret</th>
                                    <th class="text-center">Adet</th>
                                    <th class="text-center">Toplam</th>
                                    <th class="text-right">
                                        <form target="_parent" action="{{route('sepet.bosalt')}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                    </th>
                                </tr>
                                </thead>
                                @foreach(Cart::getContent() as $urunCartItem)
                                <tbody>
                                <tr>
                                    <td class="thumb" style="width: 120px;">
                                        <a href="{{ route('urun', Str::slug($urunCartItem->name)) }}"></a>
                                        <img src="" class="img-responsive" alt=""></td>
                                    <td class="details">
                                        <a href="{{ route('urun', Str::slug($urunCartItem->name)) }}">{{ $urunCartItem->name }}</a>
                                    </td>
                                    <td class="price text-center"><strong>{{ $urunCartItem->price }} ₺</strong></td>
                                    <td class="qty text-center">
                                        <a href="#" class="btn btn-xs btn-default urun-adet-azalt" data-id="{{$urunCartItem->id}}" data-adet="{{$urunCartItem->quantity-1}}">-</a>
                                        <span style="padding: 10px 20px">{{$urunCartItem->quantity}}</span>
                                        <a href="#" class="btn btn-xs btn-default urun-adet-artir" data-id="{{$urunCartItem->id}}" data-adet="{{$urunCartItem->quantity+1}}">+</a>
                                    </td>
                                    <td class="total text-center"><strong class="primary-color">{{$urunCartItem->getPriceSum()}} ₺</strong></td>
                                    <td class="text-right">
                                        <form action="{{route('sepet.kaldir', $urunCartItem->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="main-btn icon-btn" value="Sepetten Kaldır"><i class="fa fa-close"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="empty" colspan="3"></th>
                                    <th>Toplam Tutar</th>
                                    <th colspan="2" class="sub-total">{{Cart::getTotal()}} ₺</th>
                                </tr>
                                </tfoot>
                            </table>
                            @if(Cart::getTotal()>=20)
                            <div class="pull-right">
                                <a href="{{route('odeme')}}" class="primary-btn">Ödeme Adımına Geç</a>
                            </div>
                                @endif
                            @if(Cart::getTotal()<20)
                                    <div class="pull-right">
                                        <a href="{{route('odeme')}}" class="primary-btnn" onclick="return false;">Ödeme Adımına Geç</a>
                                    </div>
                                @endif
                                @else
                                    <p>Sepetinizde herhangi bir ürün bulunmuyor</p>
                                @endif
                            <br>
                        </div>

                    </div>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
    <br>
@endsection
