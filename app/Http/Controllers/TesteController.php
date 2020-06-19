<?php

namespace App\Http\Controllers;
use App\Teste;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
       return view('layout.welcome');
    }

    public function index()
    {
        $testes = Teste::all();
        return view('teste.index')->withTestes($testes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teste.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             
        Teste::create($request->all());
        return redirect()->route('teste.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Teste $teste)
    {
        return view('teste.show')->withTeste($teste);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teste $teste)
    { 
        return view('teste.edit')->withTeste($teste);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teste $teste)
    {
        $teste->fill($request->all())->save();
        return redirect()->route('teste.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teste $teste)
    {
        $teste->delete();
        return redirect()->route('teste.index');
    }
}
