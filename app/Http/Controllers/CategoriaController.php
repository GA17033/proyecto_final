<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class CategoriaController
 * @package App\Http\Controllers
 */
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate();

        return view('categoria.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * $categorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = new Categoria();
        return view('categoria.create', compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Categoria::$rules);

        $categoria = Categoria::all();
        if ($request->hasFile('imagen')) {
            $categoria['imagen'] = $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/categorias', $categoria['imagen']);
            $categoria = $request->all();
            $categoria['imagen'] = $request->file('imagen')->getClientOriginalName();
        }
        Categoria::create($categoria);
        return redirect()->route('categorias.index')
            ->with('success', 'Categoria creada con exito.')
            ->with('color', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Categoria $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        request()->validate(Categoria::$rules);
        $imagen = Categoria::find($categoria->id);
        $img = Categoria::all();
        if ($request->hasFile('imagen')) {
            $img['imagen'] = $request->file('imagen')->getClientOriginalName();
            $request->file('imagen')->storeAs('public/categorias', $img['imagen']);
            $img = $request->all();
            $img['imagen'] = $request->file('imagen')->getClientOriginalName();
        
        
        unlink('storage/categorias/'.$imagen->imagen);
        $categoria->update($img);
    }else{
        $img = $request->all();
        $img['imagen'] = $imagen->imagen;
        $categoria->update($img);
    }
        return redirect()->route('categorias.index')
            ->with('success', 'Categoria actualizada con exito.')
            ->with('color', 'warning');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $imagen = Categoria::find($id);
        unlink('storage/categorias/'.$imagen->imagen);
        $categoria = Categoria::find($id)->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria eliminada con exito.')
            ->with('color', 'danger');
    }
}
