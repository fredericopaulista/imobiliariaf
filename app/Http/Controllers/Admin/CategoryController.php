<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $category = $this->category->create($data);

        //dd ($banner);
        session()->put('success','Categoria Criada com Sucesso.');
        return redirect()->route('category.index');




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
    public function edit($category)
    {
        $category = $this->category->findOrFail($category);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $category)
    {
        $data = $request->all();

        $category = $this->category->find($category);

        //dd($data);

        $category->update($data);
        session()->put('success','Categoria Atualizada com Sucesso.');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $category)
    {
        $category = $this->category->find($category);
        $category->delete();
        
        session()->put('success','Categoria Apagada com Sucesso.');
        return redirect()->route('category.index');
    }
}
