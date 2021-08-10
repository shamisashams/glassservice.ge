@extends('client.layout.site')
@section('subhead')
    <title>{{ $aboutPage->meta_title }}</title>
    <meta name="description"
          content="{{ $aboutPage->meta_description }}">
@endsection

@section('wrapper')
    <div class="about_us_page wrapper">
        <div class="main_title">{{ $aboutPage->title }}</div>
        <div class="container">
            <div class="img">
                <img src="/img/other/1.png" alt=""/>
            </div>
            <div class="title">@lang("client.about_company_history")</div>
            <div class="paragraph dark">
                {!! $aboutPage->description !!}
            </div>
            <div class="img">
                <img src="/img/other/1.png" alt=""/>
            </div>
            {{--            <div class="paragraph dark">--}}
            {{--                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული--}}
            {{--                ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი--}}
            {{--                წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის--}}
            {{--                შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ--}}
            {{--                დროს არის მოსახერხებელი ამ გენერატორით შექმნილი ტექსტის გამოყენება,--}}
            {{--            </div>--}}
        </div>
        <div class="bottom">
            <button class="arrow" id="prev_about">
                <img src="/img/icons/arrows/prev.svg" alt=""/>
            </button>
            <button class="arrow" id="next_about">
                <img src="/img/icons/arrows/next.svg" alt=""/>
            </button>
            <div class="title">@lang("client.about_certificates_and_awards")</div>
            <div class="bottom_flex bottom_about_slide flex">
                @foreach($certificates as $certificate)
                    <div class="item">
                        <img class="img" src="{{ url($certificate->file ? $certificate->file->file_url : '') }}" alt="{{ $certificate->title }}">
                        <div class="paragraph">{{ $certificate->title }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

