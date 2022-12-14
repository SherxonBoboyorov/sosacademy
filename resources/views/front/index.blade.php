@extends('layouts.front')

@section('content')

    <!-- slaeder start -->

    <div class="slader">
        <div class="slader__list">
            @foreach ($sliders as $slider)
            <div class="slader__item" style="background-image: url({{ asset($slider->image) }})">
                <section class="container">
                    <div class="slader__cart">
                        <h3 class="slader__title__h3">{{ $slider->{'title_' . app()->getLocale()} }}</h3>
                        <h2 class="slader__title__h2">{{ $slider->{'description_' . app()->getLocale()} }}</h2>
                    </div>
                </section>
            </div>
            @endforeach
        </div>
    </div>

    <!-- slaeder end -->


    <!-- COURSES start -->

    <div class="courses">
        <section class="container">
            <div class="courses__cart">
                <h2 class="courses__title__h2 wow fadeInLeft">@lang('main.КУРСЫ')</h2>

                <div class="courses__list">
                    @foreach($categories as $category)
                        <div class="courses__item wow fadeInUp">
                            <div class="courses__img">
                                <img src="{{ asset('front/foto/courses_1.png') }}" alt="courses">
                            </div>
                            <h3 class="courses__title__h3">{{ $category->title_ru }}</h3>

                            <ul class="courses__menu">
                                @foreach($category->sub_categories as $child)
                                <li>
                                    <a href="#!" class="courses__menu__link">{{ $child->title_ru }}</a>
                                    <ul class="courses__dropdown">
                                        @foreach($child->products as $product)
                                            {{ dd('products') }}
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>

                <a href="{{ route('courses') }}" class="courses__link">@lang('main.ПОСМОТРЕТЬ ВСЕ') <span><i class="fas fa-arrow-right"></i></span></a>
            </div>
        </section>
    </div>

    <!-- COURSES end -->



    <!-- OUR WARRANTY start -->

    <div class="our_warranty">
        <section class="container">
            <div class="our_warranty__cart">
                <h2 class="courses__title__h2 wow fadeInLeft">@lang('main.НАША ГАРАНТИЯ')</h2>
                <div class="our_warranty__list">
                   @foreach ($warranties as $warranty)
                    <div class="our_warranty__item wow fadeInDown">
                        <div class="our_warranty__img">
                            <img src="{{ asset($warranty->image) }}" alt="our_warranty">
                        </div>

                        <div class="our_warranty__item__text">
                            <h3 class="our_warranty__title__h3">{{ $warranty->{'title_' . app()->getLocale()} }}</h3>
                            <span class="our_warranty__item__number">0{{ $loop->index+1 }}</span>
                            <div class="our_warranty__text">
                                <p>
                                    {!! $warranty->{'content_' . app()->getLocale()} !!}
                                </p>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
    </div>

    <!-- OUR WARRANTY end -->


    <!-- NEWS start -->

     <div class="news">
        <section class="container">
            <div class="news__cart">
                <h2 class="courses__title__h2 wow fadeInLeft">@lang('main.НОВОСТИ')</h2>
                <div class="news__list">
                   @foreach ($articles as $article)
                    <div class="news__item wow fadeInDown">
                        <div class="news__img">
                            <img src="{{ asset($article->image) }}" alt="news">
                            <h4 class="news__title__h4">{{ $article->created_at->format('d.m.Y') }}</h4>
                        </div>
                        <a href="{{ route('articles') }}" class="news__link">{{ $article->{'title_' . app()->getLocale()} }}<span><i class="fas fa-arrow-right"></i></span></a>

                        <div class="news__text">
                            <p>
                                {!! $article->{'content_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                   @endforeach
                </div>
            <a href="{{ route('articles') }}" class="courses__link wow fadeInLeft">@lang('main.ПОСМОТРЕТЬ ВСЕ') <span><i class="fas fa-arrow-right"></i></span></a>
            </div>
        </section>
    </div>

    <!-- NEWS end -->

@endsection


