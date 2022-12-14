@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Добавить продукт</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label for="sub_category_id">Выберите категорию [Uzbek]</label>
                            <select name="sub_category_id" id="sub_category_id" class="form-control">
                                @foreach ($sub_categories as $sub_category)
                                  <option value="{{ $sub_category->id }}">{{ $sub_category->title_ru }} | Родитель: {{ $sub_category->name_ru }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('sub_category_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('sub_category_id') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="title_uz">Имя курса [Uzbek]</label>
                            <input type="text" id="title_uz" class="form-control" name="title_uz">
                            @if($errors->has('title_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="title_ru">Имя курса [Russian]</label>
                            <input type="text" id="title_ru" class="form-control" name="title_ru">
                            @if($errors->has('title_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('title_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    {{-- product end --}}

                    {{-- course description start--}}

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="course_description_uz">ОПИСАНИЕ КУРСА [Latin Uzbek]</label>
                            <textarea name="course_description_uz" class="my-editor" id="course_description_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('course_description_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_description_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="course_description_ru">ОПИСАНИЕ КУРСА [Russian]</label>
                            <textarea name="course_description_ru" class="my-editor" id="course_description_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('course_description_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_description_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    {{-- course description end--}}

                    {{-- age_of_students start --}}

                    <br><br>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="age_of_students">ВОЗРАСТ УЧЕНИКОВ</label>
                            <input type="text" id="age_of_students" class="form-control" name="age_of_students">
                            @if($errors->has('age_of_students'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('age_of_students') }}
                            </div>
                            @endif
                        </div>

                    {{-- age_of_students end --}}


                    {{-- complexity start --}}

                        <div class="col-md-6">
                            <label for="complexity">СЛОЖНОСТЬ</label>
                            <input type="number" id="complexity" class="form-control" name="complexity">
                            @if($errors->has('complexity'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('complexity') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <br><br>
                    {{-- complexity end --}}



                     {{-- course registration  start--}}

                     <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="course_registration_uz">Регистрации [Latin Uzbek]</label>
                            <textarea name="course_registration_uz" class="my-editor" id="course_registration_uz" cols="30" rows="10"></textarea>
                            @if($errors->has('course_registration_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_registration_uz') }}
                            </div>
                            @endif
                        </div>
                    </div>

                    <br><hr>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-12">
                            <label for="course_registration_ru">Регистрации [Russian]</label>
                            <textarea name="course_registration_ru" class="my-editor" id="course_registration_ru" cols="30" rows="10"></textarea>
                            @if($errors->has('course_registration_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('course_registration_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

                     {{-- course registration end--}}

                     <br><br>


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
