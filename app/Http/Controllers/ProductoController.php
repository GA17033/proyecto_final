<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedore;
use Illuminate\Http\Request;

/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate();
        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);
        return view('producto.index', compact('productos','categorias','proveedores'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);
        $producto = new Producto();
        return view('producto.create', compact('producto', 'categorias', 'proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::all();
        if ($request->hasFile('foto')) {
            $producto['foto'] = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/productos', $producto['foto']);
            $producto = $request->all();
            $producto['foto'] = $request->file('foto')->getClientOriginalName();
        }
        Producto::create($producto);

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado con exito')
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
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);
        return view('producto.show', compact('producto', 'categorias', 'proveedores'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);

        $categorias = Categoria::all();
        $categorias = json_decode($categorias);
        $proveedores = Proveedore::all();
        $proveedores = json_decode($proveedores);

        return view('producto.edit', compact('producto', 'categorias', 'proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);
        $imagen = Producto::find($producto->id);
        $img = Producto::all();
        if ($request->hasFile('foto')) {
            $img['foto'] = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->storeAs('public/productos', $img['foto']);
            $img = $request->all();
            $img['foto'] = $request->file('foto')->getClientOriginalName();
        
        
        unlink('storage/productos/'.$imagen->foto);
        $producto->update($img);
    }else{
        $img = $request->all();
        $img['foto'] = $imagen->foto;
        $producto->update($img);
    }

        return redirect()->route('productos.index')
            ->with('success', 'Producto actualizado con exito')
            ->with('color', 'warning');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $imagen = Producto::find($id);
        unlink('storage/productos/'.$imagen->foto);
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('warning', 'Producto eliminado con exito')
            ->with('color', 'danger');
    }
}
