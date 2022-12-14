@extends('layouts.front')

@section('content')


<!-- about start -->

<div class="about" style="background-image: url(/front/foto/about.png);">
    <section class="container">
        <div class="about__cart">
            <h2 class="courses__title__h2">@lang('main.НОВОСТИ')</h2>
            <ul class="about__menu">
                <li><a href="{{ route('/') }}" class="about__menu__link"><span><i class="fas fa-arrow-left"></i></span> @lang('main.ГЛАВНАЯ')</a></li>
            </ul>
        </div>
    </section>
</div>

<!-- about end -->


<!-- NEWS start -->

<div class="news">
    <section class="container">
        <div class="news__cart">
            <h2 class="courses__title__h2 wow fadeInLeft">@lang('main.НОВОСТИ')</h2>
            <div class="news__list wow fadeInDown">
               @foreach ($articles as $article)
                <div class="news__item">
                    <div class="news__img">
                        <img src="{{ asset($article->image) }}" alt="news">
                        <h4 class="news__title__h4">{{ $article->created_at->format('d.m.Y') }}</h4>
                    </div>
                   <a href="{{ route('article', $article->id) }}" class="news__link">{{ $article->{'title_' . app()->getLocale()} }}<span><i class="fas fa-arrow-right"></i></span></a>

                    <div class="news__text">
                        <p>
                            {!! $article->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </section>
</div>

<!-- NEWS end -->



@endsection
