@extends('client.layout.site')
@section('subhead')
    <title>@lang('client.home_meta_title')</title>
    <meta name="description"
          content="@lang('client.home_meta_description')">
@endsection

@section('wrapper')
    <div class="projects_page wrapper">
        <div class="main_title">პროექტები</div>
        <div class="paragraph">
            შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული
            ნაწარმის შემქმნელებს
        </div>
        <form class="filters">
            <input type="radio" name="project_p_filter" id="pjfp1" />
            <label class="project_p_filter active" for="pjfp1">ყველა</label>
            <input type="radio" name="project_p_filter" id="pjfp2" />
            <label class="project_p_filter" for="pjfp2">სააბაზანო</label>
            <input type="radio" name="project_p_filter" id="pjfp3" />
            <label class="project_p_filter" for="pjfp3">მინაპაკეტი</label>
            <input type="radio" name="project_p_filter" id="pjfp4" />
            <label class="project_p_filter" for="pjfp4">სხვადასხვა</label>
        </form>
        <div class="project_main_grid active margin_bottom">
            <div class="grid">
                <div class="item">
                    <div class="img">
                        <img src="/img/projects/1.png" alt="" />
                    </div>
                    <div class="title">პროექტის დასახელება და სხვა</div>
                    <div class="paragraph">
                        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                        ტიპოგრაფიული ნაწარმის შემქმნელებს
                    </div>
                    <a href="project-detail.html">
                        <button class="main_button">
                            გაიგე მეტი
                            <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                        </button>
                    </a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="/img/projects/2.png" alt="" />
                    </div>
                    <div class="title">პროექტის დასახელება და სხვა</div>
                    <div class="paragraph">
                        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                        ტიპოგრაფიული ნაწარმის შემქმნელებს
                    </div>
                    <a href="project-detail.html">
                        <button class="main_button">
                            გაიგე მეტი
                            <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                        </button>
                    </a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="/img/projects/3.png" alt="" />
                    </div>
                    <div class="title">პროექტის დასახელება და სხვა</div>
                    <div class="paragraph">
                        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                        ტიპოგრაფიული ნაწარმის შემქმნელებს
                    </div>
                    <a href="project-detail.html">
                        <button class="main_button">
                            გაიგე მეტი
                            <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                        </button>
                    </a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="/img/projects/4.png" alt="" />
                    </div>
                    <div class="title">პროექტის დასახელება და სხვა</div>
                    <div class="paragraph">
                        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                        ტიპოგრაფიული ნაწარმის შემქმნელებს
                    </div>
                    <a href="project-detail.html">
                        <button class="main_button">
                            გაიგე მეტი
                            <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                        </button>
                    </a>
                </div>
                <div class="item">
                    <div class="img">
                        <img src="/img/projects/5.png" alt="" />
                    </div>
                    <div class="title">პროექტის დასახელება და სხვა</div>
                    <div class="paragraph">
                        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და
                        ტიპოგრაფიული ნაწარმის შემქმნელებს
                    </div>
                    <a href="project-detail.html">
                        <button class="main_button">
                            გაიგე მეტი
                            <img src="/img/icons/arrows/1.png" alt="" class="abs_arr" />
                        </button>
                    </a>
                </div>
            </div>
            <div class="pagination flex center">
                <button><img src="/img/icons/arrows/3.png" alt="" /></button>
                <button class="page_num active">1</button>
                <button class="page_num">2</button>
                <button class="page_num">3</button>
                <button class="page_num">4</button>
                <button><img src="/img/icons/arrows/4.png" alt="" /></button>
            </div>
        </div>
        <div class="project_main_grid flex">2</div>
        <div class="project_main_grid flex">3</div>
        <div class="project_main_grid flex">4</div>
    </div>

@endsection

