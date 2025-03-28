<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImcController extends Controller
{

    public function index(){
        $data['titulo'] = "Minha a de Contato dinamica.";
        return view('imc',$data);
    }
    
    public function calcular(Request $request) {
        $peso = $request->input('peso');
        $altura = $request->input('altura');
    
        if ($altura > 0) {
            $imc = $peso / ($altura * $altura);
            $resultado = "Seu IMC é " . number_format($imc, 2);
        } else {
            $resultado = "Erro: Altura inválida!";
        }
    
        return redirect()->back()->with('resultado', $resultado);
    }

}