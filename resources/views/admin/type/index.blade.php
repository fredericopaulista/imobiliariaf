@extends('admin.layout.master')

@section('title', 'Tipos de Imóveis')
@section('content')
@include('admin.layout.toastr')
<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="dash-bookings">
                    <div class="act-title ">
                        <h5>Tipos de Imóveis</h5>

                        <a class="col-md-2 text-right sm-left btn v7" href="{{ route('imoveis.type.create') }}">Cadastrar</a>
                    </div>
                    <div class="db-booking-wrap table-content table-responsive">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col"></th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Ícone</th>
                                    <th scope="col"></th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($types as $type )


                                <tr class="bg-white">
                                    <th scope="row">{{ $type->id }}</th>
                                    <td></td>
                                    <td>{{ $type->type }}</td>
                                    <td>{{ $type->icon }}</td>
                                    <td>
                                    </td>
                                    <td>
                                        <div class="listing-button">
                                            <a href="{{ route('imoveis.type.edit', $type->id) }}" class="btn v3">Editar</a>
                                            <form id="exclude"  action="{{route('imoveis.type.delete', $type->id)}}" method="post">
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
