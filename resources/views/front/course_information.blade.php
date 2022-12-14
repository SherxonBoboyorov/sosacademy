@extends('layouts.front')

@section('content')

<!-- about start -->

<div class="about" style="background-image: url(/front/foto/about.png);">
    <section class="container">
        <div class="about__cart">
            <h2 class="courses__title__h2">ff</h2>
            <ul class="about__menu">
                <li><a href="{{ route('courses') }}" class="about__menu__link"><span><i class="fas fa-arrow-left"></i></span> @lang('main.КУРСЫ')</</a></li>
            </ul>
        </div>
    </section>
</div>

<!-- about end -->

<!-- courses_in start -->

<div class="courses_in">
    <section class="container">
        <div class="courses_in__cart">
            <ul class="courses_in__list">
               @foreach ($products as $product)
                <li class="courses_in__item">
                    <div class="courses_in__logo wow fadeInLeft">
                        <img src="{{ asset('front/foto/courses_in.png') }}" alt="courses_1">
                    </div>

                    <div class="wow fadeInRight">
                        <h3 class="our_warranty__title__h3">@lang('main.ОПИСАНИЕ КУРСА')</h3>
                        <div class="courses_in__text">
                            <p>
                                {!! $product->{'course_description_' . app()->getLocale()} !!}
                            </p>
                        </div>
                    </div>
                </li>

                <li class="courses_in__item">
                    <div class="courses_in__logo wow fadeInLeft">
                        <img src="{{ asset('front/foto/courses_in.png') }}" alt="courses_1">
                    </div>

                    <div class="wow fadeInRight">
                        <h3 class="our_warranty__title__h3">@lang('main.ВОЗРАСТ УЧЕНИКОВ')</h3>
                        <div class="courses_in__text">
                            <p>
                                {{ $product->age_of_students }}
                            </p>
                        </div>
                    </div>
                </li>

                <li class="courses_in__item">
                    <div class="courses_in__logo wow fadeInLeft">
                        <img src="{{ asset('front/foto/courses_in.png') }}" alt="courses_1">
                    </div>

                    <div class="wow fadeInRight">
                        <h3 class="our_warranty__title__h3">@lang('main.СЛОЖНОСТЬ')</h3>
                        <div class="courses_in__text">
                            <div class="rating_area">
                                @for ($i = 9; $i>= 0; $i--)
                                    @if ($i < $product->complexity)
                                        <input type="checkbox" checked name="complexity" id="star-{{$i}}" value="{{$i}}">
                                        <label for="star-{{$i}}" title="Оценка «{{$i}}»"></label>
                                    @else
                                        <input type="checkbox" name="complexity" id="star-{{$i}}" value="{{$i}}">
                                        <label for="star-{{$i}}" title="Оценка «{{$i}}»"></label>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                </li>

                <li class="courses_in__item wow fadeInLeft">
                    <div class="courses_in__logo">
                        <img src="{{ asset('front/foto/courses_in.png') }}" alt="courses_1">
                    </div>

                    <div class="wow fadeInRight">
                        <h3 class="our_warranty__title__h3">@lang('main.ПРЕДВАРИТЕЛЬНЫЕ ТРЕБОВАНИЯ ДЛЯ РЕГИСТРАЦИИ НА ДАННОМ КУРСЕ')</h3>
                        <div class="courses_in__text">
                            <ul class="courses_in__menu">
                                <li>{!! $product->{'course_registration_' . app()->getLocale()} !!}</li>

                            </ul>
                        </div>
                    </div>
                </li>
              @endforeach
            </ul>

            <div class="courses_in__table__max">
                <h2 class="courses__title__h2 wow fadeInLeft">@lang('main.Прайс лист')</h2>

                <table class="courses_in__table wow fadeInDown" cellpadding="10" cellspacing="10">
                    @foreach ($prices as $price)

                    <tr>
                        <th></th>
                        <td>Group</td>
                        <td>Mini Group</td>
                        <td>Individual</td>
                    </tr>

                    <tr>
                        <th>@lang('main.Количество людей в группе')</th>
                        <td>{!! $price->{'number_people_' . app()->getLocale()} !!}</td>

                    </tr>

                    <tr>
                        <th>@lang('main.Частота уроков')</th>
                        <td>{!! $price->{'lesson_' . app()->getLocale()} !!}</td>

                    </tr>

                    <tr>
                        <th>@lang('main.Стоимость')</th>
                        <td>{!! $price->{'course_fee_' . app()->getLocale()} !!}</td>

                    </tr>

                    <tr>
                        <th>@lang('main.Определяется при наборе группы после регистрации')</th>
                        <td>{!! $price->{'registration_course_' . app()->getLocale()} !!}</td>
                    </tr>
                    @endforeach
                </table>

                {{-- table start foreach --}}
{{--
                <table class="courses_in__table wow fadeInDown" cellpadding="10" cellspacing="10">
                    <tr>
                        <th></th>
                        <td>Group</td>
                        <td>Mini Group</td>
                        <td>Individual</td>
                    </tr>

                    <tr>
                        <th>Количество людей в группе</th>
                           @foreach ($prices as $price)
                              <td>{!! $price->{'number_people_' . app()->getLocale()} !!}</td>
                           @endforeach
                        </tr>

                    <tr>
                        <th>Частота уроков</th>
                           @foreach ($prices as $price)
                              <td>{!! $price->{'lesson_' . app()->getLocale()} !!}</td>
                           @endforeach
                        </tr>

                    <tr>
                        <th>Стоимость</th>
                           @foreach ($prices as $price)
                             <td>{!! $price->{'course_fee_' . app()->getLocale()} !!}</td>
                           @endforeach
                    </tr>

                    <tr>
                        <th>Определяется при наборе группы после регистрации</th>
                           @foreach ($prices as $price)
                             <td>{!! $price->{'registration_course_' . app()->getLocale()} !!}</td>
                           @endforeach
                        </tr>
                </table> --}}

                {{-- table end foreach --}}

            </div>


            <div class="courses_in__button wow fadeInRight">
                <button class="courses_in__button__link modal-trigger" data-target="modal2">@lang('main.ЗАПИСАТЬСЯ НА КУРС')</button>
            </div>

            <div class="courses_in__SIGN_UP modal" id="modal2">
                <div class="courses_in__SIGN_UP__form">
                    <form action="#!">
                        <input class="header__input__form" name="name" type="text" placeholder="ФИО">
                        <input class="header__input__form" name="tel" type="tel" placeholder="Телефон">
                        <input class="header__input__form" name="email" type="text" placeholder="Email">

                        <select class="header__input__form" name="country" id="country">
                            <option  value="1" selected disabled>HTML5&amp;CSS3</option>
                        </select>

                        <input class="header__input__form header__time__form" type="time" placeholder="С" value="09:30">

                        <select class="header__input__form" name="grup" id="grup">
                            <option selected disabled>@lang('main.Вид обучения')</option>
                            <option value="1">Group</option>
                            <option value="2">Mini Group</option>
                            <option value="3">Individual</option>
                        </select>

                        <select class="header__input__form" name="language" id="language">
                            <option selected disabled>@lang('main.Язык обучения')</option>
                            <option value="1">Русский</option>
                            <option value="2">English</option>
                        </select>

                        <div class="header__iframe__form"  id="g-recaptcha">
                            <div>
                                <div>
                                    <iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdvDrwhAAAAABDw6Qb94XCZvG3aS4hXtskqb90h&amp;co=aHR0cDovL3d3dy5zb3NhY2FkZW15LnV6Ojgw&amp;hl=ru&amp;v=3TZgZIog-UsaFDv31vC4L9R_&amp;theme=light&amp;size=normal&amp;cb=nooo47cbjdk" width="304" height="78" role="presentation" name="a-sp9v33b7wgwj" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                </div>
                            </div><iframe style="display: none;"></iframe>
                        </div>

                        <button class="header__submit__form" type="submit">@lang('main.Отправить') <span><i class="fas fa-arrow-right"></i></span></button>
                    </form>

                </div>

            </div>
        </div>
    </section>
</div>

<!-- courses_in end -->

@endsection
