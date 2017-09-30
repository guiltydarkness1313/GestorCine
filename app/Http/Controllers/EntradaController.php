<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    //
    public function index(){
        return view('entrada');
    }

    public function recibirDatos(Request $request){
        echo "<h2>El resultado de sus datos es:</h2> <br>";
        $edad=$request->input('edad');
        $condicion=$request->input('condicion');

        if(12>$edad||'estudiante'==$condicion){
            echo "usted pagará 3 soles";
        }else{
            echo "usted pagará 10 soles";
        }
    }
}
