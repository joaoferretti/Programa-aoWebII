<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GastoViagemController extends Controller
{

    public function index(){
        $data['titulo'] = "Gasto de Viagem.";
        return view('gastoViagem', $data);
    }

    public function calcular(Request $request)
    {
        $distancia = $request->input('distancia');
        $consumo = $request->input('consumo');
        $preco = $request->input('preco');

        if($consumo > 0) {
            $litros = $distancia / $consumo;
            $custo = $litros * $preco;
            $resultado = "Custo da viagem: R$ " . number_format($custo, 2, ',', '.');
        } else {
            $resultado = "Erro: Consumo inválido!";
        }
        return redirect()->back()->with('resultado', $resultado);
    }

}