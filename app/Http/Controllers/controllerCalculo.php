<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function calcular(Request $request){
        $nome = $request->input('nome');
        $capital = $request->input('capital');
        $parcelas = $request->input('parcelas');
        $taxa = $request->input('taxa');
        $total = 0;
        $resultado = [];
        for($i = 1; $i <= $parcelas; $i++){
            $dados[$i]['num'] = $i;
            $dados[$i]['capital'] = number_format($capital, 2, ',', '.');
            $dados[$i]['montante'] = number_format($capital+$capital*$taxa, 2, ',', '.');
            $dados[$i]['parcela'] = number_format($dados[$i]['montante']/($parcelas-($i-1)), 2, ',', '.');
            $total += $dados[$i]['parcela'];
            $capital = $dados[$i]['montante'] - $dados[$i]['parcela'];
        }
        return view('resposta', compact('dados'));
    }
}
