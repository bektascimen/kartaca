@extends('layouts.master')
@section('content')

    <style>

        .rating-container {
            margin-top: 30px;
            font-size: 32pt;
        }

        .simple-rating i {
            color: #f5ba00;
            display: inline-block;
            padding: 1px 2px;
            cursor: pointer;
        }

    </style>

    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div>
                    <div class="col-md-15">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">SİPARİŞLERİM</h3>
                                @include('partials.alert')
                            </div>
                            @if(count($siparisler)==0)
                                <p>Henüz siparişiniz bulunmuyor.</p>
                            @else
                                <table class="shopping-cart-table table">
                                    <thead>
                                    <tr>

                                        <th class="text-center">Sİparİş Kodu</th>
                                        <th class="text-center">Ad Soyad</th>
                                        <th class="text-center">Telefon</th>
                                        <th class="text-center">Adres</th>
                                        <th class="text-center">Ücret</th>
                                        <th class="text-center">Durum</th>
                                        <th class="text-right"></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    @foreach($siparisler as $siparis)
                                        <tbody>
                                        <tr>
                                            <td class="text-center">SP-{{$siparis->id}}</td>
                                            <td class="text-center">{{$siparis->ad}} {{$siparis->soyad}}</td>
                                            <td class="text-center">{{$siparis->telefon}}</td>
                                            <td class="text-center">{{$siparis->teslimat_adresi}}</td>
                                            <td class="text-center">{{ $siparis->siparis_tutari}}₺</td>
                                            <td class="text-center"><strong
                                                    class="text-primary">{{ $siparis->durum}}</strong></td>
                                            <td>&nbsp;<a href="{{route('siparis', $siparis->id)}}"
                                                         class="main-btn icon-btn"><i class="fa fa-edit"></i></a>
                                            </td>
                                            @if($siparis -> durum == 'Siparişiniz Alındı')
                                                <td>&nbsp;<button href="{{route('siparis.sil', $siparis->id)}}"
                                                             class="primary-btn add-to-cart" data-toggle="tooltip"
                                                             data-placement="top" title="Sil"
                                                             onclick="return confirm('Siparişinizi iptal etmek istiyor musunuz?')">İPTAL ET
                                                    </button>
                                                </td>
                                            @elseif($siparis -> durum == 'Siparişiniz teslim edildi' && !$siparis->siparis_puani)
                                                <td>&nbsp;
                                                    <a href="#" class="main-btn icon-btn" data-toggle="modal"
                                                       data-target="#modalStar">
                                                        <i class="fa fa-star"></i>
                                                    </a>
                                                </td>
                                                <!-- Modal -->
                                                <div class="modal fade" id="modalStar" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">

                                                            <form action="{{ route('siparis.puanla') }}"
                                                                  method="post">
                                                                @csrf
                                                                <input type="hidden" name="siparis_id"
                                                                       value="{{ $siparis->id }}">
                                                                <div class="modal-body">
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                    <div class="text-center">
                                                                        <h4 class="modal-title" id="modalStar">
                                                                            Siparişinizi Puanlayın!</h4>
                                                                    </div>
                                                                    <div class="rating-container text-center">
                                                                        <input class="rating" name="star" type="hidden"
                                                                               value="3">
                                                                    </div>
                                                                    <button style="float: right" type="submit"
                                                                            class="primary-btn add-to-cart">Puanla
                                                                    </button>
                                                                </div>
                                                            </form>

                                                            <br><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /section -->
@endsection
