@extends('client.layout.site')

@section("meta_title", $productPage->meta_title)
@section("meta_description", $productPage->meta_description)
@section('wrapper')
    <div class="product_page wrapper">
        <div class="head flex">
            <div class="main_title">{{ $productPage->title }}</div>
            <div class="filters flex">

                @foreach($categories as $category)
{{--                    <input--}}
{{--                        type="radio"--}}
{{--                        class="product_filter_page"--}}
{{--                        name="product_filter_page"--}}
{{--                        id="pdfp{{$loop->iteration}}"--}}
{{--                    />--}}
                    <a class="title" href="{{ locale_route("client.product.index", $category->id) }}">{{ $category->title }}</a>
                @endforeach
            </div>
        </div>



            <div class="product_p_content active">
{{--                @dd($currentCategory)--}}
                <div class="title">{{ $currentCategory->title }}</div>
                <div class="paragraph">
                    {!! $productPage->description !!}
                </div>
                <div class="slider">
                    <div class="ppage_slider flex">
                        @foreach($currentCategory->product as $product)
                            <div class="item">
                                <div class="img">
                                    @if(count($product->files)>0)
                                        <img src="{{asset($product->files[0]->path.'/'.$product->files[0]->title)}}"
                                             alt=""/>
                                    @endif
                                </div>
                                <div class="title">{{ $product->title }}</div>
                                <div class="paragraph">
                                    {{ $product->short_description }}
                                </div>
                                <a href="{{ locale_route("client.product_detail.index", $product->id) }}">
                                    <button class="main_button">
                                        გაიგე მეტი
                                        <img src="/img/icons/arrows/1.png" alt="" class="abs_arr"/>
                                    </button>
                                </a>
                            </div>



                        @endforeach
                    </div>
                    <button class="arrow flex center pp_prev" >
                        <img src="/img/icons/arrows/prev.svg" alt=""/>
                    </button>
                    <button class="arrow flex center pp_next">
                        <img src="/img/icons/arrows/next.svg" alt=""/>
                    </button>
                </div>
            </div>


    </div>

@endsection

