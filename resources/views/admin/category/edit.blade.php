@extends('admin.layout.master')

@section('title', 'Cadastrar Categoria')
@section('content')

<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Atualizar Categoria :</h5>
                    </div>
                    <div class="db-add-listing">
                        <form method="post" action="{{ route('category.update', $category->id) }}">
                        @csrf
                        @method("PUT")

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Categoria</label>
                                    <input type="text" name="name" class="form-control filter-input" value="{{  $category->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-right sm-left">

                            <button class="btn v3" type="submit">Atualizar</button>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>

@endsection
