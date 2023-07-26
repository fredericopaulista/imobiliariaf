@extends('admin.layout.master')

@section('title', 'Categorias')
@section('content')
@include('admin.layout.toastr')
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="dash-bookings">
                    <div class="act-title ">
                        <h5>Categorias</h5>

                        <a class="col-md-2 text-right sm-left btn v7" href="{{ route('category.create') }}">Cadastrar Categoria</a>
                    </div>
                    <div class="db-booking-wrap table-content table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col"></th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category )


                                <tr class="bg-white">
                                    <th scope="row">{{ $category->id }}</th>
                                    <td></td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <div class="listing-button">
                                            <a href="{{ route('category.edit', $category->id) }}" class="btn v3">Editar</a>
                                            <form id="exclude"  action="{{route('category.delete', $category->id)}}" method="post">
                                                @csrf
                                                @method("DELETE")

                                                <a onClick="document.getElementById('exclude').submit();" class="btn v4" type="submit">Apagar</a>
                                            </form>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
