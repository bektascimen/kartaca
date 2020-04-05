@extends('layouts.master')
@section('content')
    <div class="section">
        <div class="container">
                       @include('partials.error')

                        <form class="clearfix" method="POST" action="{{ route('kullanici.kayitol') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                            <div class="billing-details">
                                <div class="section-title">
                                    <h4 class="title">Kullanıcı Kaydınızı Yapınız</h4>
                                </div>

                            <div class="form-group" {{ $errors->has('ad') ? 'has-error': '' }}>
                                    <input id="ad" type="text" class="input" name="ad" value="{{ old('ad') }}" placeholder="Ad" required autofocus>
                                    @if($errors->has('ad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ad') }}</strong>
                                    </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                    <input id="soyad" type="text" class="input" name="soyad" value="{{ old('soyad') }}" placeholder="Soyad" required>
                            </div>

                            <div class="form-group">
                                    <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" placeholder="E-Mail" required>
                            </div>

                            <div class="form-group">
                                    <input id="sifre" type="password" class="input" name="password" placeholder="Şifre" required>
                            </div>

                            <div class="form-group">
                                    <input id="sifre-tekrari" type="password" class="input" name="password_confirmation" placeholder="Şifre Tekrar" required>
                            </div>

                            <div class="pull-right">
                                    <button type="submit" class="primary-btn">
                                        Kayıt Ol
                                    </button>
                            </div>
                            </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
@endsection
