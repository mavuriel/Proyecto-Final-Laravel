<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Mercancia;
use App\Models\datoForaneo;
use PDF;


class ClienteController extends Controller
{

    //Pagina principal
    public function principal()
    {

        $centro = Mercancia::where('destino', 'centro')
            ->sum('pesototal');
        $norte = Mercancia::where('destino', 'norte')
            ->sum('pesototal');
        $sur = Mercancia::where('destino', 'sur')
            ->sum('pesototal');
        $este = Mercancia::where('destino', 'este')
            ->sum('pesototal');
        $oeste = Mercancia::where('destino', 'oeste')
            ->sum('pesototal');

        $bas = datoForaneo::latest();

        $ptotal = Mercancia::sum('pesototal');
        $porc = $ptotal * 100 / 100000;
        $int = (int) $porc;

        $unidades = Mercancia::count();

        return view('principal', compact('bas','ptotal','int', 'centro','norte','sur','este','oeste','unidades'));
    }

    //Panel de administracion
    public function administracion()
    {
        $entregas = Mercancia::orderByDesc('id')
                                ->paginate(5);

        $datosact = datoForaneo::orderByDesc('id')->paginate(2);

        return view('moduleadmin',compact('entregas','datosact'));
    }
    //Ingreso de datos a bascula y agencia
    public function redirect(){
        return view ('agregaBascula');
    }
    public function adminBasAgen(Request $req){

        $nuevodato = new datoForaneo();

        $nuevodato->bascula = $req->a_bascula;
        $nuevodato->agencia = $req->a_agencia;

        $nuevodato->save();
        return back()->with('dato_agregado', 'Dato agregado exitosamente');

    }

    //Funcion vista PDF
    public function dataModel(){
        $dtotal = Mercancia::sum('pesototal');
        $centro = Mercancia::where('destino', 'centro')
            ->sum('pesototal');
        $norte = Mercancia::where('destino', 'norte')
            ->sum('pesototal');
        $sur = Mercancia::where('destino', 'sur')
            ->sum('pesototal');
        $este = Mercancia::where('destino', 'este')
            ->sum('pesototal');
        $oeste = Mercancia::where('destino', 'oeste')
            ->sum('pesototal');
        $unidades = Mercancia::count();

    //Marca error pero si funciona
        $pdf = PDF::loadView('layoutPDF',compact('unidades','dtotal','centro','norte','sur','este','oeste'));

        return $pdf->download('reporte.pdf');
    }

    public function test(){
        $dtotal = Mercancia::sum('pesototal');
        $centro = Mercancia::where('destino', 'centro')
            ->sum('pesototal');
        $norte = Mercancia::where('destino', 'norte')
            ->sum('pesototal');
        $sur = Mercancia::where('destino', 'sur')
            ->sum('pesototal');
        $este = Mercancia::where('destino', 'este')
            ->sum('pesototal');
        $oeste = Mercancia::where('destino', 'oeste')
            ->sum('pesototal');
        $unidades = Mercancia::count();
        return view('layoutPDF',compact('unidades','dtotal','centro','norte','sur','este','oeste'));
    }
}
