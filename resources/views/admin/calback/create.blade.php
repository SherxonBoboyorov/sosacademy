@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Добавить Адрес</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <!-- end page title end breadcrumb -->
        <form action="{{ route('calback.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="phone">ТЕЛЕФОН Номер</label>
                            <input type="text" id="phone" class="form-control" name="phone">
                            @if($errors->has('phone'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('phone') }}
                            </div>
                            @endif
                        </div>
                  </div>

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <label for="address_uz">АДРЕС [Uzbek]</label>
                            <input type="text" id="address_uz" class="form-control" name="address_uz">
                            @if($errors->has('address_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('address_uz') }}
                            </div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label for="address_ru">АДРЕС [Russian]</label>
                            <input type="text" id="address_ru" class="form-control" name="address_ru">
                            @if($errors->has('address_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('address_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                      <div class="col-md-6">
                        <label for="gmail">Gmail</label>
                        <input type="text" id="gmail" class="form-control" name="gmail">
                        @if($errors->has('gmail'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ $errors->first('gmail') }}
                        </div>
                        @endif
                    </div>
                    </div>
                    <div class="row" style="margin-top: 15px">
                      <div class="col-md-6">
                        <label for="information_uz">Информация [Uzbek]</label>
                        <input type="text" id="information_uz" class="form-control" name="information_uz">
                        @if($errors->has('information_uz'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ $errors->first('information_uz') }}
                        </div>
                        @endif
                    </div>

                        <div class="col-md-6">
                          <label for="information_ru">Информация [Russian]</label>
                          <input type="text" id="information_ru" class="form-control" name="information_ru">
                          @if($errors->has('information_ru'))
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                              {{ $errors->first('information_ru') }}
                          </div>
                          @endif
                      </div>
                      </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success btn-block">Сохранить</button>
                        </div>
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
