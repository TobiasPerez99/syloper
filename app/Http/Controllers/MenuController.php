<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();        
        return view('Menu.show', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Menu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                

        $menu = new Menu;

        $menu->nombre = $request->nombre;
        $menu->descripcion = $request->descripcion;
        $menu->url = $request->url;
        $menu->target = $request->target;
        $menu->estado = $request->estado;

        $response = $menu->save();

        if ($response) {
            return redirect()->route('menu.index')->with('store' , 'El Menu Fue Creado Correctamente');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('Menu.edit' , compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        
        $menu->nombre = $request->input('nombre');
        $menu->url = $request->input('url');
        $menu->descripcion = $request->input('descripcion');
        $menu->target = $request->input('target');
        $menu->estado = $request->input('estado');
        $menu->icono = $request->input('icono');

        $response = $menu->update();

        if ($response) {
            return redirect()->route('menu.index')->with('update' , 'El Menu Fue Actualizado Correctamente');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        
        $response = $menu->delete();                

        if ($response) {
            return redirect()->back()->with('destroy' , 'El Menu Fue Eliminado Correctamente');
        }
    }
}
