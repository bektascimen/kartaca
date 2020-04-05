@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <form id="checkout-form" class="clearfix" action="{{ route('adres.guncelle', ['id'=>$adresler->id]) }}"
                  method="post">
                {{csrf_field()}}
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
                                <h4 class="title">Adres BİLGİLERİNİZİ GÜncelleyİn</h4>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="adres_baslik" placeholder="Adres Başlığı"
                                       value="{{$adresler->adres_baslik}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="satir1" placeholder="Adres Satırı1"
                                       value="{{$adresler->satir1}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="satir2" placeholder="Adres Satırı2"
                                       value="{{$adresler->satir2}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="telefon" placeholder="Telefon"
                                       value="{{$adresler->telefon}}">
                            </div>
                            <div class="form-group">
                                <label for="varsayilan">
                                    <input id="varsayilan" type="checkbox" name="varsayilan" placeholder="Varsayılan"
                                           value="1" {{$adresler->varsayilan == 1 ? 'checked' : null }}>
                                    Varsayılan adres olarak ayarla
                                </label>
                            </div>
                            <div class="pull-right">
                                {{csrf_field()}}
                                <button type="submit" class="primary-btn">GÜNCELLE</button>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </form>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection
