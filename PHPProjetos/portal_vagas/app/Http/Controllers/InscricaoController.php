<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaga;
use App\Models\Inscricao;
use Illuminate\Support\Facades\Auth;

class InscricaoController extends Controller
{
    public function add(Request $request, Vaga $vaga){
$inscricao = Inscricao::firstOrCreate(['usuario_id' => Auth::id(), 'vaga_id', 'status' => 'aberto']);
$inscricao->vagas()->attach($vaga->id);

return redirect()->route('vaga.show', $inscricao->id)->with('success', 'Inscricao adicionada a vaga.');
    }
}
