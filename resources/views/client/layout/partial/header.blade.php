@if(request()->routeIs("client.home.index"))
    <header class="header">
        <div class="wrapper flex">
            <a href="index.html" class="logo">
                <img src="/img/logo/1.png" alt=""/>
            </a>
            <div class="header_right flex">
                <div class="navbar flex">
                    <a class="nav_item active" href="{{ route("client.home.index") }}">მთავარი</a>
                    <a class="nav_item" href="{{ route("client.product.index") }}">პროდუქტი</a>
                    <a class="nav_item" href="{{ route("client.service.index") }}">სერვისი</a>
                    <a class="nav_item" href="{{ route("client.about.index") }}">ჩვენ შესეხებ</a>
                    <a class="nav_item" href="{{ route("client.project.index") }}">პროექტები</a>
                    <a class="nav_item" href="{{ route("client.contact.index") }}">კონტაქტი</a>
                </div>
                <div class="flex">
                    <div class="search flex center">
                        <input type="text" placeholder="Search here"/>
                        <button class="search_icon">
                            <img src="/img/icons/header/1.png" alt=""/>
                        </button>
                        <button class="close_search">
                            <img src="/img/icons/header/2.png" alt=""/>
                        </button>
                    </div>
                    <div class="languages">
                        <div class="lang_on">

                            <img src="/img/lang/{{app()->getLocale()}}.png" alt="ff"/>
                        </div>
                        <div class="dropdown flex center">
                            @foreach(config('translatable.locales') as $locale)
                                @if(app()->getLocale() != $locale)
                                    <a href="{{ get_url($locale) }}" class="lang_option"
                                    ><img src="/img/lang/{{$locale}}.png" alt="{{$locale}}"
                                        /></a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <button class="menu_button"></button>
        </div>
    </header>
@else
    <div class="all_showcases">
        <header class="header">
            <div class="wrapper flex">
                <a href="index.html" class="logo">
                    <img src="/img/logo/1.png" alt=""/>
                </a>
                <div class="header_right flex">
                    <div class="navbar flex">
                        <a class="nav_item active" href="{{ route("client.home.index") }}">მთავარი</a>
                        <a class="nav_item" href="{{ route("client.product.index") }}">პროდუქტი</a>
                        <a class="nav_item" href="{{ route("client.service.index") }}">სერვისი</a>
                        <a class="nav_item" href="{{ route("client.about.index") }}">ჩვენ შესეხებ</a>
                        <a class="nav_item" href="{{ route("client.project.index") }}">პროექტები</a>
                        <a class="nav_item" href="{{ route("client.contact.index") }}">კონტაქტი</a>
                    </div>
                    <div class="flex">
                        <div class="search flex center">
                            <input type="text" placeholder="Search here"/>
                            <button class="search_icon">
                                <img src="/img/icons/header/1.png" alt=""/>
                            </button>
                            <button class="close_search">
                                <img src="/img/icons/header/2.png" alt=""/>
                            </button>
                        </div>
                        <div class="languages">
                            <div class="lang_on">

                                <img src="/img/lang/{{app()->getLocale()}}.png" alt="ff"/>
                            </div>
                            <div class="dropdown flex center">
                                @foreach(config('translatable.locales') as $locale)
                                    @if(app()->getLocale() != $locale)
                                        <a href="{{ get_url($locale) }}" class="lang_option"
                                        ><img src="/img/lang/{{$locale}}.png" alt="{{$locale}}"
                                            /></a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <button class="menu_button"></button>
            </div>
        </header>
    </div>
@endif
