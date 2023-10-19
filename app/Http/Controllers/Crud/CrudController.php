<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Http\Requests\PutCrudRequest;
use App\Http\Requests\StoreCrudRequest;
use App\Models\Category;
use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //nos ayuda a regresar una pagina con los datos
    {
        //$datos = Crud::get();
        $datos = Crud::paginate(1);
        return view('crud.index',['datos' => $datos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //nos ayuda a regresar una pagina con el formulario para llamar luego a store y hacer un post
    {
        //buscamos las categorias para enviarlas a la vsita  
        $categories = Category::get();
        //regresamos una vista
        echo view('crud.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCrudRequest $request) //se llama desde create y hace la carga a la base de datos
    {
        Crud::create($request->all());
        return redirect("/dashboard/post")->with('status',"Registro Creado");
    }

    /**
     * Display the specified resource.
     */
    public function show(Crud $post)
    {
        //
        $categories = Category::get();
        echo view('crud.show', compact('categories', 'post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crud $post) //nos ayuda a cargar una pagina con el formulario y los datos anteriores para luego llamar a update
    {
        // 
        $categories = Category::get();
        echo view('crud.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutCrudRequest $request, Crud $post) //actualiza la base de datos
    {
        $data = $request->all();
        //nombre y disco para guardar la imagen
        $nombre = $data["image"]->getClientOriginalName();
        $data["image"]->move(public_path("image"), $nombre);
        $data["image"] = $nombre;
        $post->update($data);
        //enviar a ruta index con un mensaje tipo flash para usarlo en el layout
        return redirect("/dashboard/post")->with('status',"Registro actualizado");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Crud $post)
    {
        $post->delete();
        return redirect('/dashboard/post')->with('status',"Registro Eliminado");
    }
}
