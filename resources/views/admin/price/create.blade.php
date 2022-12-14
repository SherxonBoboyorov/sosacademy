@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Добавить Прайс лист</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('price.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="product_id">Выберите продукта [Uzbek]</label>
                            <select name="product_id" id="product_id" class="form-control">
                                @foreach ($products as $product)
                                  <option value="{{ $product->id }}">{{ $product->title_ru }} | Родитель: {{ $product->title_ru }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('product_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('product_id') }}
                            </div>
                            @endif
                        </div>
                    </div>

                   <br><hr style="border:0.5px solid blue"><br>

                       <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="number_people_uz"> Guruhdagi odamlar soni [Latin Uzbek]</label>
                            <textarea name="number_people_uz" class="my-editor" id="number_people_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('number_people_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('number_people_uz') }}
                            </div>
                            @endif
                        </div>


                        <div class="col-md-6">
                            <label for="number_people_ru">Количество людей в группе [Russian]</label>
                            <textarea name="number_people_ru" class="my-editor" id="number_people_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('number_people_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('number_people_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>



                    <br><hr style="border:1px solid blue"><br>


                    {{-- Частота уроков start--}}

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="lesson_uz">Dars chastotasi  [Latin Uzbek]</label>
                            <textarea name="lesson_uz" class="my-editor" id="lesson_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('lesson_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('lesson_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="lesson_ru">Частота уроков [Russian]</label>
                            <textarea name="lesson_ru" class="my-editor" id="lesson_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('lesson_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('lesson_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    {{-- Частота уроков end--}}

                    <br><hr style="border:1px solid blue"><br>

                     {{-- Стоимость  start--}}

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="course_fee_uz">Narxi [Latin Uzbek]</label>
                            <textarea name="course_fee_uz" class="my-editor" id="course_fee_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('course_fee_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_fee_uz') }}
                            </div>
                            @endif
                        </div>
                    <br><hr>

                        <div class="col-md-6">
                            <label for="course_fee_ru">Стоимость [Russian]</label>
                            <textarea name="course_fee_ru" class="my-editor" id="course_fee_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('course_fee_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_fee_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                     {{-- Стоимость end--}}

                  <br><hr style="border:1px solid blue"><br>

                     {{-- Определяется при наборе группы после регистрации  start--}}

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="registration_course_uz">Ro'yxatdan o'tgandan keyin guruhni ishga olishda aniqlanadi [Latin Uzbek]</label>
                            <textarea name="registration_course_uz" class="my-editor" id="registration_course_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('registration_course_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('registration_course_uz') }}
                            </div>
                            @endif
                        </div>
                    <br><hr>

                        <div class="col-md-6">
                            <label for="registration_course_ru">Определяется при наборе группы после регистрации [Russian]</label>
                            <textarea name="registration_course_ru" class="my-editor" id="registration_course_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('registration_course_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('registration_course_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                     {{-- Определяется при наборе группы после регистрации end--}}


                     <br><hr style="border:1px solid blue"><br>


                    {{-- meta: title description start --}}

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="meta_title_ru">Meta Title RU</label>
                            <textarea name="meta_title_ru" class="form-control" id="meta_title_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_ru') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_ru">Meta Description RU</label>
                            <textarea name="meta_description_ru" class="form-control" id="meta_description_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_description_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="meta_title_uz">Meta Title UZ</label>
                            <textarea name="meta_title_uz" class="form-control" id="meta_title_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_title_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="meta_description_uz">Meta Description UZ</label>
                            <textarea name="meta_description_uz" class="form-control" id="meta_description_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('meta_description_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('meta_description_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success btn-block">Сохранить</button>
                        </div>
                    </div>
                </div>
        </form>

    </div><!-- container -->

</div>
@endsection
@section('custom_js')
@component('admin.utils.tinymce')@endcomponent
@endsection
