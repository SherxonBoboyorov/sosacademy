@extends('layouts.front')

@section('content')


<!-- about start -->

<div class="about" style="background-image: url(/front/foto/about.png);">
    <section class="container">
        <div class="about__cart">
            <h2 class="courses__title__h2">@lang('main.КУРСЫ')</h2>
            <ul class="about__menu">
                <li><a href="{{ route('/') }}" class="about__menu__link"><span><i class="fas fa-arrow-left"></i></span> @lang('main.ГЛАВНАЯ')</a></li>
            </ul>
        </div>
    </section>
</div>

<!-- about end -->


<!-- COURSES start -->

<div class="courses_in">
    <section class="container">
        <div class="courses__cart">
          <h2 class="courses__title__h2">@lang('main.КУРСЫ')</h2>
            <div class="courses__list">
              @foreach ($categories as $category)
               @print_r($category);
                <div class="courses__item wow fadeInUp">
                    <div class="courses__img">
                        <img src="{{ asset('front/foto/courses_1.png') }}" alt="courses">
                    </div>
                    <h3 class="courses__title__h3">{{ $category->{'title_' . app()->getLocale()} }}</h3>

                    <ul class="courses__menu">
                        <li>
                            <a href="#!" class="courses__menu__link">Front-end</a>

                            <ul class="courses__dropdown">
                                <li>
                                    <a href="{{ route('courseinformation') }}" class="courses__dropdown__link">HTML5&amp;CSS3</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#!" class="courses__menu__link">Back-end</a>

                            <ul class="courses__dropdown">
                                <li>
                                    <a href="{{ route('courseinformation') }}" class="courses__dropdown__link">PHP</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="courses__item wow fadeInUp">
                    <div class="courses__img">
                        <img src="{{ asset('front/foto/courses_2.png') }}" alt="courses">
                    </div>
                    <h3 class="courses__title__h3">ЯЗЫКИ ПРОГРАММИРОВАНИЯ</h3>

                    <ul class="courses__menu">
                        <li>
                            <a href="java.html" class="courses__menu__link">Java</a>
                        </li>
                    </ul>
                </div>
               @endforeach
            </div>
        </div>
    </section>
</div>

<!-- COURSES end -->

@endsection

