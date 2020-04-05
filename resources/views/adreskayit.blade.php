@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <form id="checkout-form" class="clearfix" action="{{ route('adres.kaydet') }}" method="post">
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
                                <h4 class="title">Adres Kaydınızı Yapınız</h4>
                            </div>
                                <div class="form-group">
                                    <input id="adres_baslik" class="input" type="text" name="adres_baslik" placeholder="Adres Başlığı" value="{{old('adres_baslik')}}">
                                </div>
                                <div class="form-group">
                                    <input id="ad" class="input" type="text" name="ad" placeholder="Ad" value="{{old('ad')}}">
                                </div>
                                <div class="form-group">
                                    <input id="soyad" class="input" type="text" name="soyad" placeholder="Soyad" value="{{old('soyad')}}">
                                </div>
                                <div class="form-group">
                                    <input id="satir1" class="input" type="text" name="satir1" placeholder="Cadde, mahalle, apartman adı" value="{{old('satir1')}}">
                                </div>
                                <div class="form-group">
                                    <input id="satir2" class="input" type="text" name="satir2" placeholder="Apartman no, daire no" value="{{old('satir2')}}">
                                </div>
                                <div class="form-group">
                                    <input id="telefon" class="input" type="text" name="telefon" placeholder="Telefon" value="{{old('telefon')}}">
                                </div>
                                <div class="form-group">
                                    <input id="varsayilan" type="checkbox" name="varsayilan" placeholder="Varsayılan" value="1" {{old('varsayilan') ? 'checked' : null}}> Varsayılan adres olarak ayarla
                                </div>
                            <div class="pull-right">
                                <button type="submit" class="primary-btn">KAYDET</button>
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
