<!-- HEADER -->
<header>
    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="{{ route('anasayfa') }}">
                        <img src="/img/logo.png" alt="" style="width: 155px;">
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search -->
                <div class="header-search">
                    <form action="{{ route('urun_ara') }}" method="post">
                        {{ csrf_field() }}
                        <input class="input search-input" name="aranan" value="{{old('aranan')}}" type="text" placeholder="Ne aramıştınız?">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->

            </div>
            <div class="pull-right">
                <ul class="header-btns">
                    @guest
                    <!-- Account -->
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase">Hesabım&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</strong>
                        </div>

                        <a href="#" class="login-trigger" data-target="#login" data-toggle="modal">GİRİŞ YAP</a> / <a href="{{ route('kullanici.kayitol') }}" class="text-uppercase">Üye Ol</a>

                        <div id="login" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button data-dismiss="modal" class="close">&times;</button>

                                        <form action="{{route('kullanici.oturumac')}}" method="post">
                                            {{ csrf_field() }}
                                            <h5 align="center">Üye Girişi</h5>
                                            <input id="email" type="email" name="email" class="username form-control" placeholder="E-Mail"/>
                                            <br>
                                            <input id="sifre" type="password" name="sifre" class="password form-control" placeholder="Şifre"/>
                                            <br>
                                            <button class="primary-btn">Giriş Yap</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /Account -->
                    @endguest

                    @auth
                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a href="{{route('sepet')}}" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <a href="{{route('sepet')}}">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty">{{Cart::getTotalQuantity()}}</span>
                            </div>
                            </a>
                            <strong class="text-uppercase">Sepetim:</strong>
                            <br>
                            <span>{{Cart::getTotal()}} ₺ </span>
                        </a>
                    </li>
                    <!-- /Cart -->
                        <li class="header-account dropdown default-dropdown">
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <strong  class="text-uppercase hidden-xs hidden-sm">Hesap Ayarlarım <i class="fa fa-caret-down"></i></strong>
                            </div>

                            <div class="hidden-xs hidden-sm">
                            <p>Hoşgeldin, {{ auth()->user()->ad  }}</p>
                            </div>

                            <ul class="custom-menu">
                                <li><a href="{{route('kisiselbilgilerim')}}"><i class="fa fa-user"></i>  KİŞİSEL BİLGİLERİM</a></li>
                                <li><a href="{{route('adresbilgilerim')}}"><i class="fa fa-address-card"></i>Adres BİLGİLERİM</a></li>
                                <li><a href="{{route('siparisler')}}"><i class="fa fa-shopping-basket"></i>SİPARİŞLERİM</a></li>
                                <li><a href="{{route('begenilen-urunler')}}"><i class="fa fa-heart"></i>BEĞENDİĞİM ÜRÜNLER</a></li>
                                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="fa fa-sign-out"></i> Çıkış</a></li>
                                <form id="logout-form" action="{{route('kullanici.oturumukapat')}}" method="post" style="display: none;">
                                    {{csrf_field()}}
                                </form>
                            </ul>
                        </li>
                    @endauth
                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                @include("menu.item", ['items' => $kategoriler ?? '', 'child' => false])
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->
