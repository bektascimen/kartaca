@extends('layouts.master')
@section('content')
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <form id="checkout-form" class="clearfix" action="{{ route('kisisel.bilgilerim', ['id'=>auth()->user()->id]) }}" method="post">
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
                                <h4 class="title">KİŞİSEL BİLGİLERİM</h4>
                            </div>
                            @include('partials.alert')
                            <div class="form-group">
                                <input class="input" type="text" name="ad" placeholder="Ad" value="{{auth()->user()->ad}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="soyad" placeholder="Soyad" value="{{auth()->user()->soyad}}">
                            </div>
                            <div class="form-group">
                                <input class="input" type="puan" name="puan" placeholder="Puanınız" value="0 OrdanBiPuan, Çok Yakında!" disabled>
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="E-mail" value="{{auth()->user()->email}}" disabled>
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
