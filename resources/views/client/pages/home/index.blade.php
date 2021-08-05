@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection
@section('wrapper')
    <section class="hero_section">
        <div class="hero_slider">
            <div class="slide">
                <div class="overlay">
                    <img src="/img/hero/1.png" alt="" class="bg_img" />
                    <div class="content wrapper flex">
                        <div class="hero_head">სლაიდერის სათაური</div>
                        <div class="paragraph light">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                    </div>
                </div>
                <button class="view_video">
                    <img src="/img/icons/hero/1.png" alt="" />
                </button>
            </div>
            <div class="slide">
                <div class="overlay">
                    <img src="/img/hero/2.jpg" alt="" class="bg_img" />
                    <div class="content wrapper flex">
                        <div class="hero_head">ეხმარება რეალურთან</div>
                        <div class="paragraph light">
                            შემთხვევითად გენერირებული დიზაინერებსდიზაინერებსტექსმის შემქმნტი
                            ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარელებს,
                        </div>
                    </div>
                </div>
                <button class="view_video">
                    <img src="/img/icons/hero/1.png" alt="" />
                </button>
            </div>
            <div class="slide">
                <div class="overlay">
                    <img src="/img/hero/3.jpg" alt="" class="bg_img" />
                    <div class="content wrapper flex">
                        <div class="hero_head">ტიპოგრაფიული დიზაინერებს</div>
                        <div class="paragraph light">
                            შემთხვევითად ის შემქმნგენერირებულიელებს, რეალურთან ტექსტი
                            ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმ
                        </div>
                    </div>
                </div>
                <button class="view_video">
                    <img src="/img/icons/hero/1.png" alt="" />
                </button>
            </div>
        </div>
        <button class="arrow flex center" id="hero_prev">
            <img src="/img/icons/arrows/prev.svg" alt="" />
        </button>
        <button class="arrow flex center" id="hero_next">
            <img src="/img/icons/arrows/next.svg" alt="" />
        </button>
    </section>
    <section class="home_products wrapper margin_bottom">
        <div class="head flex">
            <div class="main_title">ჩვენი პროდუქტი</div>
            <a href="products.html" class="see_all paragraph dark"
            ><b>სრულად</b>
            </a>
        </div>
        <div class="paragraph dark">
            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული
            ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი
            წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის
            შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ
            დროს
        </div>
        <div class="slider">
            <div class="home_products_slider pro_sliders_both flex">
                <a href="product-detail.html">
                    <div class="item img">
                        <img src="/img/products/1.png" alt="" />
                        <div class="read_more">
                            <div>გაიგე მეტი</div>
                            <img src="/img/icons/arrows/2.png" alt="" />
                        </div>
                        <div class="caption">
                            <div class="title light">პროდუქტის დასახელება</div>
                            <div class="paragraph light">
                                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                            </div>
                        </div>
                    </div>
                </a>
                <a href="product-detail.html">
                    <div class="item img">
                        <img src="/img/products/2.png" alt="" />
                        <div class="read_more">
                            <div>გაიგე მეტი</div>
                            <img src="/img/icons/arrows/2.png" alt="" />
                        </div>
                        <div class="caption">
                            <div class="title light">პროდუქტის დასახელება</div>
                            <div class="paragraph light">
                                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                            </div>
                        </div>
                    </div>
                </a>
                <a href="product-detail.html">
                    <div class="item img">
                        <img src="/img/products/3.png" alt="" />
                        <div class="read_more">
                            <div>გაიგე მეტი</div>
                            <img src="/img/icons/arrows/2.png" alt="" />
                        </div>
                        <div class="caption">
                            <div class="title light">პროდუქტის დასახელება</div>
                            <div class="paragraph light">
                                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                            </div>
                        </div>
                    </div>
                </a>
                <a href="product-detail.html">
                    <div class="item img">
                        <img src="/img/products/4.png" alt="" />
                        <div class="read_more">
                            <div>გაიგე მეტი</div>
                            <img src="/img/icons/arrows/2.png" alt="" />
                        </div>
                        <div class="caption">
                            <div class="title light">პროდუქტის დასახელება</div>
                            <div class="paragraph light">
                                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <button class="arrow" id="prev_product">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="13.503"
                    height="23.619"
                    viewBox="0 0 13.503 23.619"
                >
                    <path
                        id="Icon_ionic-ios-arrow-back"
                        data-name="Icon ionic-ios-arrow-back"
                        d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z"
                        transform="translate(-11.251 -6.194)"
                    />
                </svg>
            </button>
            <button class="arrow" id="next_product">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="13.503"
                    height="23.619"
                    viewBox="0 0 13.503 23.619"
                >
                    <path
                        id="Icon_ionic-ios-arrow-back"
                        data-name="Icon ionic-ios-arrow-back"
                        d="M20.683,18,11.746,9.07a1.688,1.688,0,0,1,2.391-2.384L24.262,16.8a1.685,1.685,0,0,1,.049,2.327L14.144,29.32a1.688,1.688,0,0,1-2.391-2.384Z"
                        transform="translate(-11.251 -6.194)"
                    />
                </svg>
            </button>
        </div>
    </section>
    <section class="home_services wrapper margin_bottom">
        <div class="main_title">ჩვენი სერვისი</div>
        <div class="grid">
            <div class="item">
                <div class="img">
                    <img src="/img/services/1.png" alt="" />
                </div>
                <div class="title">სერვისის დასახელება</div>
                <div class="paragraph">
                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                    მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა,
                    როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="/img/services/2.png" alt="" />
                </div>
                <div class="title">სერვისის დასახელება</div>
                <div class="paragraph">
                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                    მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა,
                    როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="/img/services/3.png" alt="" />
                </div>
                <div class="title">სერვისის დასახელება</div>
                <div class="paragraph">
                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                    მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა,
                    როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ
                </div>
            </div>
            <div class="item">
                <div class="img">
                    <img src="/img/services/4.png" alt="" />
                </div>
                <div class="title">სერვისის დასახელება</div>
                <div class="paragraph">
                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                    მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა,
                    როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ
                </div>
            </div>
        </div>
        <a class="see_all" href="services.html">
            <button class="main_button">
                სრულად <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
            </button>
        </a>
    </section>
    <section class="home_aboutus wrapper flex margin_bottom">
        <div class="left">
            <div class="main_title">ჩვენ შესახებ</div>
            <div class="paragraph">
                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული
                ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი
                წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის
                შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ
                დროს არის მოსახერხებელი ამ გენერატორით შექმნილი ტექსტის გამოყენება,
                რადგან უბრალოდ „ტექსტი ტექსტი ტექსტი“ ან სხვა გამეორებადი სიტყვების
                ჩაყრა, ხელოვნურ ვიზუალურ სიმეტრიას ქმნის და არაბუნებრივად გამოიყურება.
                ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ
                როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ დროს არის მოსახერხებელი ამ
                გენერატორით შექმნილი ტექსტის გამოყენება, რადგან უბრალოდ „ტექსტი ტექსტი
                ტექსტი“ ან სხვა გამეორებადი სიტყვების ჩაყრა.
            </div>
            <div class="slider_title">სერტიფიკატები და ჯილდოები</div>
            <div class="slider">
                <div class="home_about_slider flex">
                    <div class="item">
                        <div class="img"></div>
                        <div class="paragraph">სერტიფიკატის დასახელება</div>
                    </div>
                    <div class="item">
                        <div class="img"></div>
                        <div class="paragraph">სერტიფიკატის დასახელება</div>
                    </div>
                    <div class="item">
                        <div class="img"></div>
                        <div class="paragraph">სერტიფიკატის დასახელება</div>
                    </div>
                    <div class="item">
                        <div class="img"></div>
                        <div class="paragraph">სერტიფიკატის დასახელება</div>
                    </div>
                </div>
                <button id="next_about">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="13.503"
                        height="23.619"
                        viewBox="0 0 13.503 23.619"
                    >
                        <path
                            id="Icon_ionic-ios-arrow-back"
                            data-name="Icon ionic-ios-arrow-back"
                            d="M20.683,18,11.746,9.07a1.688,1.688,0,0,1,2.391-2.384L24.262,16.8a1.685,1.685,0,0,1,.049,2.327L14.144,29.32a1.688,1.688,0,0,1-2.391-2.384Z"
                            transform="translate(-11.251 -6.194)"
                            fill="#0097AC"
                        />
                    </svg>
                </button>
            </div>

            <a href="#">
                <button class="main_button">
                    გაიგე მეტი
                    <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                </button>
            </a>
        </div>
        <div class="img right">
            <img src="/img/other/1.png" alt="" />
        </div>
    </section>
    <section class="home_products projects wrapper margin_bottom">
        <div class="head flex">
            <div class="main_title">ჩვენი პროდუქტი</div>
            <a href="products.html" class="see_all paragraph dark"
            ><b>სრულად</b>
            </a>
        </div>
        <div class="filter_btns flex">
            <button class="project_filter_home paragraph active">სააბაზანო</button>
            <button class="project_filter_home paragraph">მინაპაკეტი</button>
            <button class="project_filter_home paragraph">სხვადასხვა</button>
        </div>
        <div class="project_content_home active">
            <div class="paragraph dark">
                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული
                ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი
                წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის
                შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი. სწორედ ასეთ
                დროს
            </div>
            <div class="slider">
                <div class="home_projects_slider pro_sliders_both flex">
                    <a
                        href="project-detail.html
            "
                    >
                        <div class="item img">
                            <img src="/img/products/4.png" alt="" />
                            <div class="read_more">
                                <div>გაიგე მეტი</div>
                                <img src="/img/icons/arrows/2.png" alt="" />
                            </div>
                            <div class="title light">
                                პროექტის დასახელება
                                <br />
                                <span>01.01.2021</span>
                            </div>
                            <div class="caption">
                                <div class="paragraph light">
                                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                                </div>
                            </div>
                        </div>
                    </a>
                    <a
                        href="project-detail.html
            "
                    >
                        <div class="item img">
                            <img src="/img/products/5.png" alt="" />
                            <div class="read_more">
                                <div>გაიგე მეტი</div>
                                <img src="/img/icons/arrows/2.png" alt="" />
                            </div>
                            <div class="title light">
                                პროექტის დასახელება
                                <br />
                                <span>01.01.2021</span>
                            </div>
                            <div class="caption">
                                <div class="paragraph light">
                                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                                </div>
                            </div>
                        </div>
                    </a>
                    <a
                        href="project-detail.html
            "
                    >
                        <div class="item img">
                            <img src="/img/products/4.png" alt="" />
                            <div class="read_more">
                                <div>გაიგე მეტი</div>
                                <img src="/img/icons/arrows/2.png" alt="" />
                            </div>
                            <div class="title light">
                                პროექტის დასახელება
                                <br />
                                <span>01.01.2021</span>
                            </div>
                            <div class="caption">
                                <div class="paragraph light">
                                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                                </div>
                            </div>
                        </div>
                    </a>
                    <a
                        href="project-detail.html
            "
                    >
                        <div class="item img">
                            <img src="/img/products/5.png" alt="" />
                            <div class="read_more">
                                <div>გაიგე მეტი</div>
                                <img src="/img/icons/arrows/2.png" alt="" />
                            </div>
                            <div class="title light">
                                პროექტის დასახელება
                                <br />
                                <span>01.01.2021</span>
                            </div>
                            <div class="caption">
                                <div class="paragraph light">
                                    შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                                    ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <button class="arrow" id="prev_project">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="13.503"
                        height="23.619"
                        viewBox="0 0 13.503 23.619"
                    >
                        <path
                            id="Icon_ionic-ios-arrow-back"
                            data-name="Icon ionic-ios-arrow-back"
                            d="M15.321,18l8.937-8.93a1.688,1.688,0,0,0-2.391-2.384L11.742,16.8a1.685,1.685,0,0,0-.049,2.327L21.86,29.32a1.688,1.688,0,0,0,2.391-2.384Z"
                            transform="translate(-11.251 -6.194)"
                        />
                    </svg>
                </button>
                <button class="arrow" id="next_project">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="13.503"
                        height="23.619"
                        viewBox="0 0 13.503 23.619"
                    >
                        <path
                            id="Icon_ionic-ios-arrow-back"
                            data-name="Icon ionic-ios-arrow-back"
                            d="M20.683,18,11.746,9.07a1.688,1.688,0,0,1,2.391-2.384L24.262,16.8a1.685,1.685,0,0,1,.049,2.327L14.144,29.32a1.688,1.688,0,0,1-2.391-2.384Z"
                            transform="translate(-11.251 -6.194)"
                        />
                    </svg>
                </button>
            </div>
        </div>
        <div class="project_content_home">მინაპაკეტი</div>
        <div class="project_content_home">სხვადასხვა</div>
    </section>
@endsection

@section("home_video")
    <div class="the_video_popup flex center">
        <button class="close_vid_popup">
            <img src="img/icons/header/2.png" alt="" />
        </button>
        <div class="video">
            <iframe
                src="https://www.youtube.com/embed/YjJJeB4x5go"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
    </div>
@endsection
