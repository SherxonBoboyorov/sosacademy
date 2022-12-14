@extends('layouts.front')

@section('content')

<!-- about start -->

<div class="about" style="background-image: url(/front/foto/about.png);">
    <section class="container">
        <div class="about__cart">
            <h2 class="courses__title__h2">{{ $article->{'title_' . app()->getLocale()} }}</h2>
            <ul class="about__menu">
                <li><a href="{{ route('/') }}" class="about__menu__link"><span><i class="fas fa-arrow-left"></i></span>@lang('main.ГЛАВНАЯ')</a></li>
            </ul>
        </div>
    </section>
</div>

<!-- about end -->


<!-- NEWS start -->

<div class="news_in">
    <section class="container">
        <div class="news__cart">
            <div class="news__list">
                <div class="news__item clearfix">
                    <div class="news__img wow fadeInLeft">
                        <img src="{{ asset($article->image) }}" alt="news">
                        <h4 class="news__title__h4">{{ $article->created_at->format('d.m.Y') }}.</h4>
                    </div>

                    <div class="news_in__text wow fadeInRight">
                        <p>
                            {!! $article->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- NEWS end -->


@endsection
