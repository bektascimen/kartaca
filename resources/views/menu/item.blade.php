@if($child)
    <div class="custom-menu">
        <div class="row">
            <div class="col-md-4">
                <ul class="list-links">
                    @foreach($items as $item)
                        <li>
                            <a href="{{ route("kategori", $item->slug) }}">
                                <span>{{$item->kategori_adi}}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@else
    <ul class="menu-list">
        @foreach($items as $item)
            <li @if(!$child)class="dropdown mega-dropdown" @endif>
                <a @if(!$child)class='dropdown-toggle' data-toggle='dropdown' aria-expanded='true'
                   @endif href="{{route("kategori", $item->slug)}}">
                    <span>{{$item->kategori_adi}}</span>
                    @if(!$child)
                        <i class="fa fa-caret-down"></i>
                    @endif
                </a>
                @if($item->alt()->count())
                    @include("menu.item", ['items' => $item->alt, 'child' => $item->alt()->count()])
                @endif
            </li>
        @endforeach
    </ul>
@endif
