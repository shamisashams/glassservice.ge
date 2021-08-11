@if(request()->routeIs("client.home.index"))
    <header class="header">
        <div class="wrapper flex">
            <a href="index.html" class="logo">
                <img src="/img/logo/1.png" alt=""/>
            </a>
            <div class="header_right flex">
                <div class="navbar flex">
                    <a class="nav_item active" href="{{ locale_route("client.home.index") }}">@lang("client.header_home_navigation") </a>
                    <a class="nav_item" href="{{ locale_route("client.product.index") }}">@lang("client.header_product_navigation")</a>
                    <a class="nav_item" href="{{ locale_route("client.service.index") }}">@lang("client.header_service_navigation")</a>
                    <a class="nav_item" href="{{ locale_route("client.about.index") }}">@lang("client.header_about_us_navigation")</a>
                    <a class="nav_item" href="{{ locale_route("client.project.index") }}">@lang("client.header_projects_navigation")</a>
                    <a class="nav_item" href="{{ locale_route("client.contact.index") }}">@lang("client.header_contact_navigation")</a>
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
                        <a class="nav_item active" href="{{ locale_route("client.home.index") }}">@lang("client.header_home_navigation") </a>
                        <a class="nav_item" href="{{ locale_route("client.product.index") }}">@lang("client.header_product_navigation")</a>
                        <a class="nav_item" href="{{ locale_route("client.service.index") }}">@lang("client.header_service_navigation")</a>
                        <a class="nav_item" href="{{ locale_route("client.about.index") }}">@lang("client.header_about_us_navigation")</a>
                        <a class="nav_item" href="{{ locale_route("client.project.index") }}">@lang("client.header_projects_navigation")</a>
                        <a class="nav_item" href="{{ locale_route("client.contact.index") }}">@lang("client.header_contact_navigation")</a>
                    </div>
{{--                    @dd($localizations['current']['locale'])--}}

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
