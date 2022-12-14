@extends('layouts.admin')

@section('content')
    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-4">
                    <div class="page-title-box">
                        <h4 class="page-title">Список Адрес</h4>
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
                            <th>ТЕЛЕФОН</th>
                            <th>АДРЕС</th>
                            <th>EMAIL</th>
                            <th colspan="2" style="width: 4%;">Действий</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($calbacks as $calback)
                            <tr>
                                <td>{{ $calback->id }}</td>
                                <td>{{ $calback->phone }}</td>
                                <td>{{ $calback->address }}</td>
                                <td>{{ $calback->gmail }}</td>
                                <td>
                                    <a href="{{ route('calback.edit', $calback->id) }}" class="btn btn-info btn-icon">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                {{-- <td>
                                    <form action="{{ route('calback.destroy', $calback->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-warning btn-icon">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{-- {!! $calback->links() !!} --}}
                </div>
            </div>

        </div>
    </div>
@endsection
