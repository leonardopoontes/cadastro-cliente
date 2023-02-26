<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [

        'cpf',
        'nome',
        'nascimento',
        'sexo',
        'endereco',
        'estado',
        'cidade'
    ];

    public function resultado(Request $request)
    {
        $query = Cliente::query();

        if ($request->filled('cpf')) {
            $query->where('cpf', $request->input('cpf'));
        }
        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->input('nome') . '%');
        }
        if ($request->filled('data_nascimento')) {
            $query->where('data_nascimento', $request->input('data_nascimento'));
        }
        if ($request->filled('sexo')) {
            $query->where('sexo', $request->input('sexo'));
        }
        if ($request->filled('estado')) {
            $query->where('estado', $request->input('estado'));
        }
        if ($request->filled('cidade')) {
            $query->where('cidade', 'like', '%' . $request->input('cidade') . '%');
        }

        $clientes = $query->get();

        return view('resultado', [
            'clientes' => $clientes,
        ]);
    }


}
