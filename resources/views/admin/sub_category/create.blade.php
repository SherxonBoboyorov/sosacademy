@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Добавить  суб_категория</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <form action="{{ route('sub_category.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="card">
                <div class="card-body">

                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-4">
                            <label>Выберите родительскую категорию</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title_ru }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('category_id') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="name_uz">name [Uzbek]</label>
                            <input type="text" id="name_uz" class="form-control" name="name_uz">
                            @if($errors->has('name_uz'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_uz') }}
                            </div>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <label for="name_ru">name [Russian]</label>
                            <input type="text" id="name_ru" class="form-control" name="name_ru">
                            @if($errors->has('name_ru'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('name_ru') }}
                            </div>
                            @endif
                        </div>
                    </div>

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
                            <button type="submit" class="btn btn-success btn-block">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div><!-- container -->

</div>
@endsection
