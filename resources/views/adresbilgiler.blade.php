@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-9">
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
                            <h4 class="title">ADRES BİLGİLERİM</h4>
                        </div>
                        <div class="adresalan">
                            <div>
                                <a class="adresekle" href="{{route('adreskayit')}}">
                                    <i class="fa fa-plus"></i>&nbsp;Yeni Adres Ekle
                                </a>
                            </div>
                            @include('partials.alert')
                            @foreach($adresler as $adres)
                                <div class="mevcutadres">
                                    <div>
                                        <p class="adt2">
                                            {{ $adres->adres_baslik }}
                                            <a href="{{ route('adresguncelle', $adres->id) }}">
                                                <i class="fa fa-refresh"></i>&nbsp;Seçili Adresi Güncelle
                                            </a>
                                        </p>
                                    </div>
                                    <div>
                                        <p class="adresoge">
                                            <b>
                                                Ad Soyad :
                                            </b>{{$adres->ad}} {{$adres->soyad}}
                                        </p>
                                    </div>
                                    <div>
                                        <p class="adresoge"><b>Telefon :</b> {{$adres->telefon}}</p>
                                    </div>
                                    <div>
                                        <p class="adresoge"><b>Adres
                                                :</b> {{ $adres->satir1 }} {{ $adres->satir2 }} {{ $adres->ilceAdi->ilce_adi }}
                                            , {{ $adres->ilAdi->il_adi }}</p>
                                    </div>
                                    @if($adres->varsayilan)
                                        <div><p class="adresoge"><b>Durum :</b> Varsayılan Adres</p></div>
                                    @endif
                                    <a href="{{route('adres.sil', ['id'=>$adres->id])}}" class="primary-btn" style="height: 35px;">Adresİ Sİl</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
@endsection
