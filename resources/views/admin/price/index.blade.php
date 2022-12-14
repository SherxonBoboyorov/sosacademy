@extends('layouts.admin')

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">прайс-лист</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="card">
            <div class="card-body">

                @if(session('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('message') }}
                </div>

                @endif

                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 2%;">#</th>
                            <th>Родители</th>
                            <th>группе</th>
                            {{-- <th>Стоимость</th> --}}
                            <th>регистрации</th>
                            <th colspan="2" style="width: 2%;">Действий</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->id }}</td>
                            <td>{{ $price->product_id == null ? "----------" : $price->product->title_ru }}</td>
                            <td>{!! $price->number_people_ru !!}</td>
                            {{-- <td>{!! $price->lesson_ru !!}</td> --}}
                            <td>{!! $price->course_fee_ru !!}</td>
                            <td>
                                <a href="{{ route('price.edit', $price->id) }}" class="btn btn-info btn-icon">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('price.destroy', $price->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning btn-icon">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- {!! $price->links() !!} --}}
            </div>
        </div>

    </div>
</div>
@endsection
