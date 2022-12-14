@extends('layouts.admin')

@section('title', 'All slider')
    
@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit slider</h4>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- end page title end breadcrumb -->
            <form action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-8">
                                <label for="title_uz">Title [Uzbek]</label>
                                <input type="text" id="title_uz" class="form-control" value="{{ $slider->title_uz }}" name="title_uz">
                                @if($errors->has('title_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('title_uz') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-8">
                                <label for="title_ru">Title [Russian]</label>
                                <input type="text" id="title_ru" class="form-control" value="{{ $slider->title_ru }}" name="title_ru">
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
                        <br>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_uz">Description [Latin Uzbek]</label>
                                <input type="text" id="description_uz" class="form-control" value="{{ $slider->description_uz }}" name="description_uz">
                                @if($errors->has('description_uz'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_uz') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <label for="description_ru">Description [Russian]</label>
                                <input type="text" id="description_ru" class="form-control" value="{{ $slider->description_ru }}" name="description_ru">
                                @if($errors->has('description_ru'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('description_ru') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br><br>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-6">
                                <label for="meta_title_ru">Meta Title RU</label>
                                <textarea name="meta_title_ru" class="form-control" id="meta_title_ru" cols="30" rows="10">{{ $slider->meta_title_ru }}</textarea>
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
                                <textarea name="meta_description_ru" class="form-control" id="meta_description_ru" cols="30" rows="10">{{ $slider->meta_description_ru }}</textarea>
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
                                <textarea name="meta_title_uz" class="form-control" id="meta_title_uz" cols="30" rows="10">{{ $slider->meta_title_uz }}</textarea>
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
                                <textarea name="meta_description_uz" class="form-control" id="meta_description_uz" cols="30" rows="10">{{ $slider->meta_description_uz }}</textarea>
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
                            <div class="col-md-6">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control-file">
                                @if($errors->has('image'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ $errors->first('image') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset($slider->image) }}" width="150" height="150" alt="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success btn-block">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div><!-- container -->

    </div>
@endsection

