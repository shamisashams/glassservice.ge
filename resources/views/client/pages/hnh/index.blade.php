@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.hnh_meta')</title>
    <meta name="description"
          content="@lang('client.hnh_meta_description')">
@endsection

@section('wrapper')
    <section class="every_showcase hnh">
        <!-- <img src="/client/img/showcases/12.webp" alt=""> -->
        <div class="hnh_bg">
            <div class="overlay"> 
                <!-- <div class="wrapper content">
                    <div class="path">@lang('client.home') - H & H</div>
                    <div class="title">H & H</div>
                </div> -->
            </div>
        </div>
        <a href="#hnh_section">
            <div class="scroll_down">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="40" height="40" x="0" y="0" viewBox="0 0 330 330" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                <path xmlns="http://www.w3.org/2000/svg" id="XMLID_102_" d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z" data-original="#000000" style="" class=""/>
                <g xmlns="http://www.w3.org/2000/svg">
                </g>
                </svg>
            </div>
        </a>
    </section>
    <section class="hnh_section hnh_wrapper " id='hnh_section'>
        <div class="section flex center">
            <div class="text">
                <p>@lang('client.hnh_section_1')</p>
                <p>@lang('client.hnh_section_2')
                </p>
                <p>@lang('client.hnh_section_3')
                </p>
                <p>@lang('client.hnh_section_5')</p>
            </div>
            <img src="/client/img/hnh/1.webp" alt="">
        </div>
        <div class="section">
            <div class="head">@lang('client.hnh_main_title')</div>
            <div class="grid">
                <div class="grid_item">
                    <span>1</span>
                    <div class="title">@lang('client.hnh_1_title')</div>
                    <p>@lang('client.hhn_1_description')</p>
                </div>
                <div class="grid_item">
                    <span>2</span>
                    <div class="title">@lang('client.hnh_2_title')</div>
                    <p>@lang('client.hnh_2_description')</p>
                </div>
                <div class="grid_item">
                    <span>3</span>
                    <div class="title">@lang('client.hnh_3_title')</div>
                    <p>@lang('client.hnh_3_description')</p>
                </div>
                <div class="grid_item">
                    <span>4</span>
                    <div class="title">@lang('client.hnh_4_title')</div>
                    <p>@lang('client.hnh_4_description')</p>
                </div>
                <div class="grid_item">
                    <span>5</span>
                    <div class="title">@lang('client.hnh_5_title')</div>
                    <p>@lang('client.hnh_5_description')</p>
                </div>
                <div class="grid_item">
                    <span>6</span>
                    <div class="title">@lang('client.hnh_6_title')</div>
                    <p>@lang('client.hnh_6_description')</p>
                </div>
            </div>
        </div>
        <div>
            <div class="head">@lang('client.h&h_series_materials')</div>
            <div class="grid grid_seri">
                @foreach($hnhs as $hnh)
                    <div id="{{$hnh->id}}" class="grid_item open_hnh_popup">
                        <div class="img">
                            @if(count($hnh->files)>0)
                                <img src="/storage/Hnh/{{$hnh->id}}/{{$hnh->files[0]->title}}" alt="">
                            @endif
                        </div>
                        <div class="title">
                            {{$hnh->language(app()->getLocale())? $hnh->language(app()->getLocale())->title: $hnh->language()->title}}
                        </div>
                        <p>{{$hnh->language(app()->getLocale())? $hnh->language(app()->getLocale())->description: $hnh->language()->description}}</p>
                        <p>${{number_format($hnh->price/100)}}</p>
                        <button class="view">@lang('client.more_details')</button>
                    </div>

                    <div id="hnh_popup" class="hnh_popup-{{$hnh->id}}">
                        <div id="close_hnh_popup" class="close_hnh_popup-{{$hnh->id}}" data-id="{{$hnh->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.953" height="20.953"
                                 viewBox="0 0 20.953 20.953">
                                <path id="Icon_ionic-md-close" data-name="Icon ionic-md-close"
                                      d="M28.477,9.619l-2.1-2.1L18,15.9,9.619,7.523l-2.1,2.1L15.9,18,7.523,26.381l2.1,2.1L18,20.1l8.381,8.381,2.1-2.1L20.1,18Z"
                                      transform="translate(-7.523 -7.523)"/>
                            </svg>
                        </div>
                        <div class="content flex center">
                            <div class="img">
                                @if(count($hnh->files)>0)
                                    <img src="/storage/Hnh/{{$hnh->id}}/{{$hnh->files[0]->title}}" alt="">
                                @endif
                            </div>
                            <div class="details">
                                <div
                                    class="title">{{$hnh->language(app()->getLocale())? $hnh->language(app()->getLocale())->title: $hnh->language()->title}}</div>
                                <p>${{number_format($hnh->price/100)}}</p>
                                @foreach($hnh->features as $feature)
                                    <p> {{$feature->feature->language(app()->getLocale())? $feature->feature->language(app()->getLocale())->title: $feature->feature->language()->title}}</p>
                                    <select name="hnh" id="">
                                        @foreach($feature->answers()->get() as $key => $answer)
                                            <option
                                                value="">{{$answer->language(app()->getLocale())? $answer->language(app()->getLocale())->title: $answer->language()->title}}</option>
                                        @endforeach
                                    </select>
                                @endforeach
                                <p>{!!$hnh->language(app()->getLocale())? $hnh->language(app()->getLocale())->content: $hnh->language()->content!!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
