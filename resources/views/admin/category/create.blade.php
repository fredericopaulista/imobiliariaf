@extends('admin.layout.master')

@section('title', 'Cadastrar Categoria')
@section('content')

<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Cadastrar Categoria :</h5>
                    </div>
                    <div class="db-add-listing">
                        <form method="post" action="{{ route('category.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <input type="text" name="name" class="form-control filter-input" placeholder="Insira a Categoria">
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
