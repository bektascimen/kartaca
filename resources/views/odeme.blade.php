@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <form id="checkout-form" class="clearfix" action="{{ route('odemeyap') }}" method="post">
            <div class="row">
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="billing-details">
                            <div class="section-title">
                                <h4 class="title">İLETİŞİM VE FATURA BİLGİLERİ</h4>
                            </div>

                                <div class="mevcutadres">
                                    <div class="form-group">
                                        <label for="fatura_adresi">Fatura adresi</label>
                                        <select class="adt2 form-control" name="fatura_adresi">
                                            @foreach($adresler as $adres)
                                            <option @if($adres->varsayilan)selected="selected"@endif value="{{ $adres->id }}">
                                                    {{ $adres->adres_baslik }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <label for="teslimat_adres">Teslimat adresi</label>
                                        <select class="adt2 form-control" name="teslimat_adresi">
                                            @foreach($adresler as $adres)
                                                <option @if($adres->varsayilan)selected="selected"@endif value="{{ $adres->id }}">
                                                    {{ $adres->adres_baslik }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                        </div>
                        <br>
                    </div>
                    <div class="col-md-6">
                        <div class="shiping-methods">
                            <div class="section-title">
                                <h4 class="title">Ödeme Yöntemİ</h4>
                            </div>
                            <p>Satın almış olduğunuz ürünler için ödeme yönteminizi seçiniz. Şuan için sadece kapıda ödeme yöntemi sunuyoruz.
                                Online olarak ödeme işlemleri yakında sizlerle.</p>
                            <div class="input-checkbox">
                                <input type="radio" name="odeme" id="shipping-1" checked value="Nakit">
                                <label for="shipping-1">Nakit</label>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="odeme" id="shipping-2" value="Kredi Kartı">
                                <label for="shipping-2">Kredi Kartı</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shiping-methods">
                            <div class="section-title">
                                <h4 class="title">ÖDENECEK TUTAR</h4>
                            </div>
                            <div>
                                <span class="product-price" style="font-size: 20px;">{{ Cart::getTotal() }} ₺   </span>
                            </div>
                        </div>
                        <div class="pull-right">
                            {{csrf_field()}}
                            <button type="submit" class="primary-btn" data-toggle="tooltip" data-placement="top" title="Sil" onclick="return confirm('Siparişinizi tamamlamak istiyor musunuz?')">SİPARİŞİ Tamamla</button>
                        </div>
                    </div>
            </div>
            </form>
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
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
    @endsection
