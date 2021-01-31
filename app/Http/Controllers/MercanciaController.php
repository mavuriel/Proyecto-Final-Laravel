<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mercancia;
use Illuminate\Support\Facades\DB;

class MercanciaController extends Controller
{

    /* public function __construct()
    {
        $this->middleware(['auth']);
    } */

    /* public function buscar(){
        //$entregas = Mercancia::where("destino",$req->texto."%")->take(10)->get();
        //return view ('administracion',compact ('entregas'));
        return view ('vistaprueba');
    }
 */

    public function obtenerProducto()
    {
        $prueba = Mercancia::sum('pesototal');
        $porc = $prueba * 100 / 100000;
        $int = (int) $porc;

        $entregas = Mercancia::orderByDesc('id')
                                ->paginate(10);


        return view('administracion', compact('entregas','prueba','int'));
    }

    public function eliminaTrailer($id)
    {
        Mercancia::destroy($id);
        return back()->with('dato_borrado', 'Accion completa');
    }

    public function editaTrailer($id)
    {
        $t = Mercancia::find($id);
        return view('editaTrailer', compact('t'));
    }

    public function actualizaTrailer(Request $req)
    {
        $idedit = $req->idedit;

        $m = Mercancia::find($idedit);

        $m->matricula = $req->a_matricula;
        $m->conductor = $req->a_aconductor;
        $m->destino = $req->a_destino;
        $m->tara = $req->a_tara;
        $m->bascula = $req->a_bascula;
        $m->pesototal = $req->a_pesototal;

        $m->save();

        return back()->with('dato_act', 'Dato actualizado exitosamente');
    }
    public function reedireccion()
    {
        return view('agregaTrailer');
    }
    public function agregarTrailer(Request $req)
    {
        $ntrailer = new Mercancia;

        $ntrailer->matricula = $req->a_matricula;
        $ntrailer->conductor = $req->a_aconductor;
        $ntrailer->destino = $req->a_destino;
        $ntrailer->tara = $req->a_tara;
        $ntrailer->bascula = $req->a_bascula;
        $ntrailer->pesototal = $req->a_pesototal;
        $ntrailer->save();
        return back()->with('dato_agregado', 'Dato agregado exitosamente');
    }



}
