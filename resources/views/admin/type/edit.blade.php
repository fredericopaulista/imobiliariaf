@extends('admin.layout.master')

@section('title', 'Atualizar Tipo de Imóvel')
@section('content')

<div class="dash-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="db-add-list-wrap">
                    <div class="act-title">
                        <h5>Atualizar Tipo de Imóvel :</h5>
                    </div>
                    <div class="db-add-listing">
                        <form method="post" action="{{ route('imoveis.type.update', $type->id) }}">
                        @csrf
                        @method("PUT")

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Tipo de Imóvel</label>
                                    <input type="text" name="type" class="form-control filter-input" value="{{  $type->type }}">
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
