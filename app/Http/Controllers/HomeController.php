<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Agencebancaire;
use App\Model\Banque;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accueil.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creeragencebancaire()
    {
        $banque=Banque::all();
        return view('Agencebancaire.creeragencebancaire',compact('banque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storeagencebancaire(Request $request)
    {
        $request->validate([
        'AGB_LIB'=>'required',
        'AGB_TEL'=> 'required',
        'BQE_NUM' => 'required'
    ]);
      $agenceb=new Agencebancaire([
       'AGB_LIB' => $request->get('AGB_LIB'),
       'AGB_TEL'=> $request->get('AGB_TEL'),
       'BQE_NUM'=> $request->get('BQE_NUM')
      ]);
       $agenceb->save();
       return redirect('/creeragencebancaire')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function showagencebancaire($AGB_NUM)
    {
        $agenceb=Agencebancaire::find($AGB_NUM);
        return view('/indexagencebancaire', compact('agenceb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function afficheragencebancaire($AGB_NUM)
    {
        $agenceb= Agencebancaire::find($AGB_NUM);
        $banque=Banque::all();
        return view('Agencebancaire.afficheragencebancaire', ['agenceb'=>$agenceb,'banque'=>$banque, ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updateagencebancaire(Request $request, $AGB_NUM)
    {
        $request->validate([
        'AGB_LIB'=>'required',
        'AGB_TEL'=> 'required',
        'BQE_NUM' => 'required'
    ]);

      $agenceb = Agencebancaire::find($AGB_NUM);
      $agenceb->AGB_LIB = $request->get('AGB_LIB');
      $agenceb->AGB_TEL = $request->get('AGB_TEL');
      $agenceb->BQE_NUM= $request->get('BQE_NUM');
      $agenceb->save();

      return redirect('/indexagencebancaire')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyagencebancaire($AGB_NUM)
    {
     $agenceb = Agencebancaire::find($AGB_NUM);
     $agenceb->delete();

     return redirect('/indexagencebancaire')->with('success', 'Stock has been deleted Successfully');
    }
}
