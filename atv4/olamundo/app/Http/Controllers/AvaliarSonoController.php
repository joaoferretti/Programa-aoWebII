<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliarSonoController extends Controller
{

    public function index(){
        $data['titulo'] = "Avaliar Sono.";
        return view('avaliarSono',$data);
    }

    function calcular(Request $request) {
        $horasDormidas = $request->input('horas');
        if($horasDormidas < 4) {
            $sTipoSono = "Sono muito ruim 😴";
        } else if($horasDormidas < 6) {
            $sTipoSono = "Sono insuficiente 😐";
        } else if($horasDormidas <= 8) {
            $sTipoSono = "Sono adequado 😊";
        } else {
            $sTipoSono = "Sono excelente! 💤";
        }
        return redirect()->back()->with('resultado', $sTipoSono);
    }
        
}