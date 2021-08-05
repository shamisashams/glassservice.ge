@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection

@section('wrapper')
    <div class="product_page wrapper">
        <div class="head flex">
            <div class="main_title">პროდუქცია</div>
            <form class="filters flex">
                <input
                    type="radio"
                    class="product_filter_page"
                    name="product_filter_page"
                    id="pdfp1"
                />
                <label class="title" for="pdfp1">საშხაპე კაბინა</label>
                <input
                    type="radio"
                    class="product_filter_page"
                    name="product_filter_page"
                    id="pdfp2"
                />
                <label class="title" for="pdfp2">მინაპაკეტი</label>
                <input
                    type="radio"
                    class="product_filter_page"
                    name="product_filter_page"
                    id="pdfp3"
                />
                <label class="title" for="pdfp3">მინა</label>
                <input
                    type="radio"
                    class="product_filter_page"
                    name="product_filter_page"
                    id="pdfp4"
                />
                <label class="title" for="pdfp4">სარკე</label>
            </form>
        </div>
        <div class="product_p_content active">
            <div class="title">საშხაპე კაბინა</div>
            <div class="paragraph">
                შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული
                ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი
                წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის
                შესრულებისას
            </div>
            <div class="slider">
                <div class="ppage_slider flex">
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                    <div class="item">
                        <div class="img">
                            <img src="/img/products/6.png" alt="" />
                        </div>
                        <div class="title">პროდუქტის დასახელება</div>
                        <div class="paragraph">
                            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                            ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან
                        </div>
                        <a href="product-detail.html">
                            <button class="main_button">
                                გაიგე მეტი
                                <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                            </button>
                        </a>
                    </div>
                </div>
                <button class="arrow flex center" id="pp_prev">
                    <img src="/img/icons/arrows/prev.svg" alt="" />
                </button>
                <button class="arrow flex center" id="pp_next">
                    <img src="/img/icons/arrows/next.svg" alt="" />
                </button>
            </div>
        </div>
        <div class="product_p_content">მინაპაკეტი</div>
        <div class="product_p_content">მინა</div>
        <div class="product_p_content">სარკე</div>
    </div>

@endsection

