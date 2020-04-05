@extends('yonetim.layouts.master')
@section('title','Ürün Yönetimi')
@section('content')
    <h1 class="page-header">Ürün Yönetimi</h1>

    <form action="{{route('yonetim.urun.kaydet', $entry->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="pull-right">
            <button type="submit" class="btn btn-primary">
                {{@$entry->id > 0 ? "Güncelle" : "Kaydet"}}
            </button>
        </div>
        <h3 class="sub-header">
            Ürün {{@$entry->id > 0 ? "Düzenle" : "Ekle"}}
        </h3>

        @include('partials.error')
        @include('partials.alert')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="urun_adi">Ürün Adı</label>
                        <input type="text" class="form-control" id="urun_adi" name="urun_adi" placeholder="Ürün Adı" value="{{ old('urun_adi', $entry->urun_adi) }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="hidden" name="original_slug" value="{{old('slug', $entry->slug)}}">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{old('slug', $entry->slug)}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="aciklama">Açıklama</label>
                        <textarea class="form-control" id="aciklama" name="aciklama" placeholder="Açıklama">{{ old('aciklama', $entry->aciklama) }}</textarea>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fiyat">Fiyatı</label>
                    <input type="text" class="form-control" id="fiyat" name="fiyat" placeholder="Fiyat" value="{{ old('fiyat', $entry->fiyat) }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="isletme">İşletme</label><br>
                    <select name="isletme_id" id="isletme">
                        <option value="1" selected>Kartaca Yazılım</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="indirimli_fiyat">İndirimli Fiyatı</label>
                    <input type="text" class="form-control" id="indirimli_fiyat" name="indirimli_fiyat" placeholder="İndirimli Fiyat" value="{{ old('indirimli_fiyat', $entry->indirimli_fiyat) }}">
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label>
                <input type="hidden" name="gosterSlider" value="0">
                <input type="checkbox" name="gosterSlider" value="1" {{ old('gosterSlider', $entry->detay->gosterSlider) ? 'checked' : ''}}>Slider Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterOneCikan" value="0">
                <input type="checkbox" name="gosterOneCikan" value="1" {{ old('gosterOneCikan', $entry->detay->gosterOneCikan) ? 'checked' : ''}}>Öne Çıkan Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterCokSatan" value="0">
            <input type="checkbox" name="gosterCokSatan" value="1" {{ old('gosterCokSatan', $entry->detay->gosterCokSatan) ? 'checked' : ''}}>Çok Satan Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterIndirimli" value="0">
                <input type="checkbox" name="gosterIndirimli" value="1" {{ old('gosterIndirimli', $entry->detay->gosterIndirimli) ? 'checked' : ''}}>İndirimli Ürünlere Ekle
            </label>
            <label>
                <input type="hidden" name="gosterGununFirsati" value="0">
                <input type="checkbox" name="gosterGununFirsati" value="1" {{ old('gosterGununFirsati', $entry->detay->gosterGununFirsati) ? 'checked' : ''}}>Günün Fırsatı Ürününe Ekle
            </label>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="kategoriler">Kategoriler</label>
                    <select name="kategoriler[]" class="form-control" id="kategoriler" multiple>
                        @foreach($kategoriler as $kategori)
                            <option value="{{$kategori->id}}" {{collect(old('kategoriler', $urun_kategoriler))->contains($kategori->id) ? 'selected' : '' }}>{{$kategori->kategori_adi}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            @if($entry->detay->urun_resmi!=null)
                <img src="/uploads/urunler/{{$entry->detay->urun_resmi}}" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            @endif
            <label for="urun_resmi">Ürün Resmi</label>
            <input type="file" id="urun_resmi" name="urun_resmi">
        </div>
        <div class="form-group">
            @if($entry->detay->slider_resmi!=null)
                <img src="/uploads/slider/{{$entry->detay->slider_resmi}}" style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
            @endif
            <label for="slider_resmi">Slider Resmi</label>
            <input type="file" id="slider_resmi" name="slider_resmi">
        </div>

    </form>
@endsection

@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(function () {
            $('#kategoriler').select2({
                placeholder: 'Lütfen Kategori Seçiniz.'
            });
        });
    </script>
@endsection
