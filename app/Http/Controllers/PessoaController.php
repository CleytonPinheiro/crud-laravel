<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;
use app\Http\Controllers\Helpers\converter;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas= Pessoa::all();
        
        return view('pessoas.index', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         
        $data2=date('Y-m-d', strtotime($request->data));       
        $dados=[
            'nome'=>$request->nome,
               'cpf'=>$request->cpf,
               'data'=>$data2
        ];    
        Pessoa::create($dados);
        return "Pessoa cadastrado com sucesso";       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pessoacaso = Corona::findOrFail($id);
        return view('pessoas.show',compact('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pessoacaso = Pessoa::findOrFail($id);
        return view('pessoas.edit', compact('pessoacaso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            'cpf' => 'required',
            'data' => 'required|date',
        ]);
        Pessoa::whereId($id)->update($validatedData);
        return redirect('/pessoas')->with('success', 'Dados da pessoa atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoacase = Pessoa::findOrFail($id);
        $pessoacase->delete();
        return redirect('/pessoas')->with('success', 'Dados da pessoa removido com sucesso!');
    }

    
}

