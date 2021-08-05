@extends('client.layout.site')
@section('subhead')
    <title>{{ $service->meta_title }}</title>
    <meta name="description"
          content="{{ $service->meta_description }}">
@endsection

@section('wrapper')
    <div class="services_page wrapper">
        <div class="main_title">{{ $service->title }}</div>
        <div class="paragraph">
            {!! $service->description !!}
        </div>

        <div class="service_grid">
            <div class="item">
                <div class="icon">
                    <img src="/img/icons/services/1.png" alt="" />
                </div>
                <div class="title">უფასო კონსულტაცია</div>
                <div class="paragraph">
                    უფასო კონსულტაცია მინასა და სარკესთან დაკავშირებულ ნებისმიერ
                    საკითხზე. ჩვენი პროფესიონალი კადრები დაგეხმარებიან და გასცემენ
                    პასუხს თქვენს კითხვებს, როგორც ადგილზე, ასევე სატელეფონო ზარის
                    განხორციელების შემთხვევაში.
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="/img/icons/services/1.png" alt="" />
                </div>
                <div class="title">აზომვითი სამუშაო</div>
                <div class="paragraph">
                    ჩვენი კვალიფიციური ხელოსნები მოგემსახურებიან და ჩაატარებენ ყველა
                    სახის აზომვით სამუშაოს, თქვენს მიერ მითითებულ დროსა და ადგილას.
                    დაითვლება ფასი და შესრულების ვადა.
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="/img/icons/services/1.png" alt="" />
                </div>
                <div class="title">მონტაჟი</div>
                <div class="paragraph">
                    ჩვენთან შეძენილ ნებისმიერ პროდუქტს დაამონტაჟებს გამოცდილი
                    მემონტაჟეთა ჯგუფი.
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <img src="/img/icons/services/1.png" alt="" />
                </div>
                <div class="title">გარანტია</div>
                <div class="paragraph">
                    “გლას სერვისი” გთავაზობთ 1 წლიან გარანტიას მინისა და სარკის
                    ფურნიტურაზე, როგორებიცაა კარ-ფანჯრის სამაგრები, ანჯამები, სახელურები
                    და სხვა.
                </div>
            </div>
        </div>
    </div>

@endsection

