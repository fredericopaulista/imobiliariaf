@extends('admin.layout.master')

@section('title', 'Cadastrar Categoria')
@section('content')

<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Cadastrar Tipo de Imóvel :</h5>
                    </div>
                    <div class="db-add-listing">
                        <form method="post" action="{{ route('imoveis.type.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tipo de Imóvel</label>
                                    <input type="text" name="type" class="form-control filter-input" placeholder="Insira o Tipo de Imóvel">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-right sm-left">

                            <button class="btn v3" type="submit">Cadastrar</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>

@endsection
