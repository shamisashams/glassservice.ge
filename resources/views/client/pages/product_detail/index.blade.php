@extends('client.layout.site')
{{--@section('subhead')--}}
{{--    <title>@lang('client.home_meta_title')</title>--}}
{{--    <meta name="description"--}}
{{--          content="{{ $product->meta_description }}">--}}
{{--    <meta name="keywords" content="{{ $product->key_word }}">--}}

{{--@endsection--}}

@section("meta_title", $product->title)
@section("meta_description", $product->meta_description)
@section("meta_keywords", $product->key_word)


@section('wrapper')
    <div class="product_detail wrapper">
        <div class="main_title">{{ $product->category->title }}</div>
        <div class="content flex">
            <div class="info">
                <div class="title">{{ $product->title }}</div>
                <div class="paragraph">
                    {!! $product->description !!}
                </div>
            </div>
            @if(count($product->files)>0)
                <div class="view">
                    <div class="main_img img">
                        @foreach($product->files as $file)
                            @if($loop->first)
                                <img src="{{asset($file->path.'/'.$file->title)}}" alt="" class="large_image active"/>
                            @else
                                <img src="{{asset($file->path.'/'.$file->title)}}" alt="" class="large_image"/>
                            @endif
                        @endforeach
{{--                        <img src="/img/products/2.png" alt="" class="large_image"/>--}}
{{--                        <img src="/img/products/3.png" alt="" class="large_image"/>--}}
{{--                        <img src="/img/products/4.png" alt="" class="large_image"/>--}}
{{--                        <img src="/img/products/5.png" alt="" class="large_image"/>--}}
                    </div>
                    <div class="slider">
                        <div class="details_slider flex center">
                            @foreach($product->files as $file)
                                <div class="img detail_img_filter">
                                    <img src="{{asset($file->path.'/'.$file->title)}}" alt=""/>
                                </div>
                            @endforeach

{{--                            <div class="img detail_img_filter">--}}
{{--                                <img src="/img/products/1.png" alt=""/>--}}
{{--                            </div>--}}
{{--                            <div class="img detail_img_filter">--}}
{{--                                <img src="/img/products/2.png" alt=""/>--}}
{{--                            </div>--}}
{{--                            <div class="img detail_img_filter">--}}
{{--                                <img src="/img/products/3.png" alt=""/>--}}
{{--                            </div>--}}
{{--                            <div class="img detail_img_filter">--}}
{{--                                <img src="/img/products/4.png" alt=""/>--}}
{{--                            </div>--}}
{{--                            <div class="img detail_img_filter">--}}
{{--                                <img src="/img/products/5.png" alt=""/>--}}
{{--                            </div>--}}
                        </div>
                        <button class="arr" id="prev_det_img">
                            <img src="/img/icons/arrows/3.png" alt=""/>
                        </button>
                        <button class="arr" id="next_det_img">
                            <img src="/img/icons/arrows/4.png" alt=""/>
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection

