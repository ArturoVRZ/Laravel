<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest\PutCrudRequest;
use App\Http\Requests\CategoryRequest\StoreCrudRequest;
use App\Models\Category;
use App\Models\Crud;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //nos ayuda a regresar una pagina con los datos
    {
        //$datos = Crud::get();
        $datos = Category::paginate(1);
        return view('category.index',['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //nos ayuda a regresar una pagina con el formulario para llamar luego a store y hacer un post
    {
        //buscamos las categorias para enviarlas a la vsita  
        $category = new Category();
        //regresamos una vista
        echo view('category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCrudRequest $request) //se llama desde create y hace la carga a la base de datos
    {
        Category::create($request->all());
        return redirect("/dashboard/category")->with('status',"Registro Creado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category) //nos ayuda a cargar una pagina con el formulario y los datos anteriores para luego llamar a update
    {
        // 
        echo view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutCrudRequest $request, Category $category) //actualiza la base de datos
    {
        $category->update($request->all());
        //enviar a ruta index con un mensaje tipo flash para usarlo en el layout
        return redirect("/dashboard/category")->with('status',"Registro actualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('/dashboard/category')->with('status',"Registro Eliminado");
    }
}
