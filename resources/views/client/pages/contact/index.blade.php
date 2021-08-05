@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection

@section('wrapper')
    <div class="contact_page wrapper">
        <div class="main_title">კონტაქტი</div>
        <div class="flex content">
            <div class="column">
                <div class="title">დაგვიკავშირდი</div>
                <div class="paragraph">
                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                    ტიპოგრაფიული ნაწარმის შემქმნელებს
                </div>
                <div class="flex center">
                    <img src="/img/icons/contact/1.png" alt="" />
                    <div class="paragraph">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="flex center">
                    <img src="/img/icons/contact/2.png" alt="" />
                    <div class="paragraph">Lorem@ipsum.com</div>
                </div>
                <div class="flex center">
                    <img src="/img/icons/contact/3.png" alt="" />
                    <div class="paragraph">+123 321 123</div>
                </div>
                <div class="flex center">
                    <img src="/img/icons/contact/4.png" alt="" />
                    <div class="paragraph">ორშაბათი-შაბათი 09:00 - 19:00</div>
                </div>
                <div class="flex center sm">
                    <a href="#">
                        <img src="/img/icons/contact/fb.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="/img/icons/contact/ig.png" alt="" />
                    </a>
                    <a href="#">
                        <img src="/img/icons/contact/yt.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="column form">
                <div class="title">მოგვწერე</div>
                <input type="text" placeholder="სახელი" />
                <input type="text" placeholder="მეილი" />
                <input type="text" placeholder="ტელეფონი" />
                <textarea placeholder="შეტყობინება"></textarea>
                <button class="main_button send">გაგზავნა</button>
            </div>
            <div class="column">
                <div class="title">მოგვძებნე რუკაზე</div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2977.6381332197816!2d44.77072996844081!3d41.728326822196486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404472ddadc78fb3%3A0x9f529d5044be3023!2sZhiuli%20Shartava%20St%2C%20T&#39;bilisi!5e0!3m2!1sen!2sge!4v1627476895632!5m2!1sen!2sge"
                        width="600"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                    ></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection

