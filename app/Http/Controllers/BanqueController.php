<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Banque;


class BanqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $banques=Banque::all();

        return view('Banque.index', compact('banques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creer()
    {
        return view('Banque.creer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'BQE_NOM'=>'required',
        'BQE_SIGLE'=> 'required',
        'BQE_TEL' => 'required'
    ]);
      $banque=new Banque([
       'BQE_NOM' => $request->get('BQE_NOM'),
       'BQE_SIGLE'=> $request->get('BQE_SIGLE'),
       'BQE_TEL'=> $request->get('BQE_TEL')
      ]);
       $banque->save();
       return redirect('/creer')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show($BQE_NUM)
    {
        $banque=Banque::find($BQE_NUM);
        return view('/index', compact('banque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function afficher($BQE_NUM)
    {
        $banque= Banque::find($BQE_NUM);
        return view('Banque.afficher', compact('banque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $BQE_NUM)
    {
        $request->validate([
        'BQE_NOM'=>'required',
        'BQE_SIGLE'=> 'required',
        'BQE_TEL' => 'required'
    ]);

      $banque = Banque::find($BQE_NUM);
      $banque->BQE_NOM = $request->get('BQE_NOM');
      $banque->BQE_SIGLE = $request->get('BQE_SIGLE');
      $banque->BQE_TEL = $request->get('BQE_TEL');
      $banque->save();

      return redirect('/creer')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy($BQE_NUM)
    {
     $banque = Banque::find($BQE_NUM);
     $banque->delete();

     return redirect('/index')->with('success', 'Stock has been deleted Successfully');
    }
}
