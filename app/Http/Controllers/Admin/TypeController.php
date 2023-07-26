<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    private $type;

    public function __construct(Type $type)
    {
        $this->type = $type;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $type = $this->type->create($data);

        //dd ($banner);
        session()->put('success','Tipo de Imóvel Criado com Sucesso.');
        return redirect()->route('imoveis.type.index');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $type)
    {
        $type = $this->type->findOrFail($type);

        return view('admin.type.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $type)
    {
        $data = $request->all();

        $type = $this->type->find($type);

        //dd($data);

        $type->update($data);
        session()->put('success','Tipo de Imóvel Atualizado com Sucesso.');
        return redirect()->route('imoveis.type.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $type)
    {
        $type = $this->type->find($type);
        $type->delete();

        session()->put('success','Tipo de Imóvel Apagado com Sucesso.');
        return redirect()->route('imoveis.type.index');
    }
}
