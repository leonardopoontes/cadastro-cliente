<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cliente\ClienteStoreReques;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index()
    {
        //$client = Cliente::all();
        return view('index', [

        ]);
    }

    public function create()
    {

    }


    public function store(ClienteStoreReques $request)
    {
        $data = $request->validated();
        $cliente = Cliente::create($data);

        return redirect()->route('cliente.index');

    }

    public function show(Request $request)
    {
        $cliente = Cliente::all();
        return view('show', [
            'cliente' => $cliente
        ]);
    }


    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('edit', [
            'cliente' => $cliente,
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();

        $cliente = Cliente::find($id);
        $cliente->update($data);

        return redirect()->back();
    }


    public function destroy(string $id)
    {

    }

}
