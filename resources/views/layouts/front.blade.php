<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="apple-touch-icon" sizes="152x152" href="foto/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="foto/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="foto/favicon/favicon-16x16.png">
    <link rel="manifest" href="foto/favicon/site.webmanifest">
    <link rel="mask-icon" href="foto/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset('front/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">

       {!! Meta::toHtml() !!}

</head>
<body>

    <!-- animation start -->

    <div class="animation" id="loading">
		<div class="loading"><img src="{{ asset('front/foto/loading.png') }}" alt="">
            <div class="spinner-sec spin-sec-one"></div>
            <div class="spinner-sec spin-sec-two"></div>
            <div class="spinner-sec spin-sec-three"></div>
          </div>
	</div>

    <!-- animation end -->

    <!-- header start -->

    <header>
        <div class="header">
            <section class="container">
                <div class="header__list">
                    <div class="header__item">
                        <div class="header__logo wow fadeInLeft">
                            <a href="{{ route('/') }}">
                                <img src="{{ asset('front/foto/logo.png') }}" alt="logo">
                            </a>
                        </div>

                        <ul class="header__contact wow fadeInLeft">
                            <li>
                                <a class="header__contact__link" href="mailto:sositschool@gmail.com"><span><i class="fas fa-envelope"></i></span> sositschool@gmail.com</a>
                            </li>

                            <li>
                                <a class="header__contact__link" href="tel:+998 97 460-44-38"><span><i class="fas fa-phone-alt"></i></span> +998 97 460-44-38</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header__item">

                        <!-- language start -->

                        <div class="header__ru">
                            <ul>

                            <div class="header__ru_cart">
                                  <a data-target='dropdown1' class="header__en__link dropdown-trigger">{{ strtoupper(app()->getLocale()) }}</a>
                                  <span class="header__en__link"><i class="fas fa-angle-down"></i></span>
                            </div>

                            <div class="header__ru_none dropdown-content" id='dropdown1'>
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    @if($localeCode != app()->getLocale())
                                    <div class="header__ru_list @if($localeCode == app()->getLocale()) active @endif">
                                        <a rel="alternate" class="header__en__link" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ strtoupper($localeCode) }}
                                        </a>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </ul>
                        </div>

                        <!-- language start -->

                        <div class="header__SIGN_UP wow fadeInRight">
                            <button class="header__SIGN_UP__button modal-trigger" data-target="modal1">@lang('main.ЗАПИСАТЬСЯ НА КУРС') <span><i class="fas fa-pencil-alt"></i></span></button>
                            <div class="header__SIGN_UP__form modal" id="modal1">
                                <form action="{{ route('/apply') }}" method="POST">
                                    @csrf
                                    <input class="header__input__form" name="fullname" type="text" placeholder="@lang('main.ФИО')">
                                    <input class="header__input__form" name="phone_number" type="tel" placeholder="@lang('main.ТЕЛЕФОН')">
                                    <input class="header__input__form" name="mail" type="text" placeholder="Email">

                                    <select class="header__input__form" name="course_title" id="country">
                                        <option selected disabled>@lang('main.Выберите курс')</option>
                                        <option value="HTML5&amp;CSS3">HTML5&amp;CSS3</option>
                                        <option value="Bootstrap4">Bootstrap4</option>
                                        <option value="JavaScript">JavaScript</option>
                                        <option value="jQuery">jQuery</option>
                                        <option value="PHP">PHP</option>
                                        <option value="PHP MySQL">PHP MySQL</option>
                                        <option value="Laravel5 Basic">Laravel5 Basic</option>
                                        <option value="Laravel5 Advanced">Laravel5 Advanced</option>
                                        <option value="Java">Java</option>
                                        <option value="С++">С++</option>
                                        <option value="Python">Python</option>
                                        <option value="React / Ajax">React / Ajax</option>
                                        <option value="AutoCAD">AutoCAD</option>
                                        <option value="Photoshop">Photoshop</option>
                                        <option value="CorelDRAW">CorelDRAW</option>
                                        <option value="Программирование 2d 3d станков с ЧПУ">Программирование 2d 3d станков с ЧПУ</option>
                                        <option value="Бухгалтерский учёт">Бухгалтерский учёт</option>
                                        <option value="1С:бухгалтерия">1С:бухгалтерия</option>
                                        <option value="Налогообложение">Налогообложение</option>
                                        <option value="SMM-новичок">SMM-новичок</option>
                                        <option value="Компьютерная грамотность">Компьютерная грамотность</option>
                                        <option value="SMM-специалист">SMM-специалист</option>
                                        <option value="3ds Max">3ds Max</option>
                                    </select>

                                    <input class="header__input__form header__time__form" type="time" name="course_time" placeholder="С" value="date('d-m-y')">

                                    <select class="header__input__form" name="course_type" id="grup">
                                        <option selected disabled>@lang('main.Вид обучения')</option>
                                        <option value="Group">Group</option>
                                        <option value="Mini Group">Mini Group</option>
                                        <option value="Individual">Individual</option>
                                    </select>

                                    <select class="header__input__form" name="course_langugage" id="language">
                                        <option selected disabled>@lang('main.Язык обучения')</option>
                                        <option value="Русский">Русский</option>
                                        <option value="Uzbek">Uzbek</option>
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
                </div>
            </section>
        </div>
    </header>

    <!-- header end -->

    @yield('content')

    <!-- contacts start -->

    <div class="contacts">
        <section class="container">
            <div class="contacts__cart">
                <ul class="contacts__mrnu">
                    <li class="wow fadeInDown">
                        <a href="tel:+998 97 460-44-38" class="contacts__mrnu__link">
                            <span><span><i class="fas fa-phone-alt"></i></span> @lang('main.ТЕЛЕФОН')</span>
                            +998 97 460-44-38
                        </a>
                    </li>

                    <li class="wow fadeInDown">
                        <a class="contacts__mrnu__link">
                            <span><span><i class="fas fa-map-marker-alt"></i></span>@lang('main.АДРЕС')</span>
                            Яшнабадский район, улица Садыка Азимова, 68
                        </a>
                    </li>

                    <li class="wow fadeInDown">
                        <a href="mailto:sositschool@gmail.com" class="contacts__mrnu__link">
                            <span><span><i class="fas fa-map-marker-alt"></i></span>EMAIL:</span>
                            sositschool@gmail.com
                        </a>
                    </li>

                    <li class="wow fadeInDown">
                        <a class="contacts__mrnu__link">
                            <span><span><i class="fas fa-compass"></i></span>@lang('main.ОРИЕНТИР')</span>
                            Эфенди" ресторан, №145 школа
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <!-- contacts end -->

    <!-- footer start -->

    <footer>
      <div class="footer">
          <section class="container">
              <div class="footer__cart">
                  <div class="footer__list">
                      <div class="footer__logo wow fadeInLeft">
                          <a href="{{ route('/') }}">
                              <img src="{{ asset('front/foto/footer_logo.png') }}" alt="footer_logo">
                          </a>
                      </div>

                      <ul class="footer__contacts wow fadeInRight">
                          <li>
                              <a href="https://www.facebook.com/sosacademy.uz" class="footer__contacts__link"><i class="fab fa-facebook-f"></i></a>
                          </li>

                          <li>
                              <a href="https://www.instagram.com/sosacademy.uz" class="footer__contacts__link"><i class="fab fa-instagram"></i></a>
                          </li>
                      </ul>
                  </div>

                  <div class="footer__bootom wow fadeInDown">
                      <a class="footer__bootom__link">“SOS Academy” @lang('main.Все права защищены')</a>
                      <a href="https://sos.uz" class="footer__bootom__link">© Copyright 2021 - Web developed by SOS Group</a>
                  </div>
              </div>
          </section>
      </div>
  </footer>

  <!-- footer end -->

  <script src="{{ asset('front/js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('front/js/materialize.min.js') }}"></script>
  <script src="{{ asset('front/js/wow.min.js') }}"></script>
  <script src="{{ asset('front/js/slick.min.js') }}"></script>
  <script src="{{ asset('front/js/index.js') }}"></script>
  <script src="{{ asset('front/js/language.js') }}"></script>
  <script src="{{ asset('front/js/animation.js') }}"></script>
  <script>
      new WOW().init();
  </script>
</body>
</html>
