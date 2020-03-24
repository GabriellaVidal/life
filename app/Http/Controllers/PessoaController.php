<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Http\Requests\Pessoa as PessoaRequest;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = \App\Pessoa::get();
        return view('pessoas.list', compact('pessoas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PessoaRequest $request)
    {
        $pessoa = new Pessoa();
        $pessoa = $pessoa->fill($request->all());
        if($pessoa->save())
            return redirect()->to(route('index'))->with('flash_success', 'Pessoa cadastrada com sucesso');
        else
            return redirect()->to(route('index'))->with('flash_error', 'Tente Novamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        return view('pessoas.edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PessoaRequest $request, Pessoa $pessoa)
    {
        $pessoa = $pessoa->fill($request->all());
        if($pessoa->save())
            return redirect()->to(route('index'))->with('flash_success', 'Pessoa editada com sucesso');
        else
            return redirect()->to(route('index'))->with('flash_error', 'Tente Novamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        if($pessoa) {
            $pessoa->delete();
            request()->session()->flash('flash_success', 'O usuário foi removido com sucesso.');
        } else {
            request()->session()->flash('flash_error', 'O usuário não foi encontrado para ser removido.');
        }

        return redirect(route('pessoas.index'));
    }
}
