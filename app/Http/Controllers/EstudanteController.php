<?php

namespace App\Http\Controllers;

use App\Models\estudante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudantes = estudante::all();
        return view('/dashoboard', compact('estudantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('estudante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estudante::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'cpf' => $request->cpf,
            'user_id' => Auth::user()->id
        ]);
        return redirect ('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudante = estudante::findOrFail($id);
        return view('estudantes.show',['estudante' => $estudante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $estudante = estudante::findOrFail($id);
        return view('editar-estudante', ['estudante' => $estudante]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $estudante)
    {
        $estudanteAlvo = estudante::findOrFail($estudante);
        $estudanteAlvo->nome = $request->nome;
        $estudanteAlvo->idade = $request->idade;
        $estudanteAlvo->cpf = $request->cpf;
        $estudanteAlvo->update();
        return redirect('/dashboard');

    }
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy($estudante)
    {
        $estudante = estudante::findOrFail($estudante)->delete();
        return redirect()->back();
    }
}
