<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Exercice;


class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexexercice()
    {
       $exercice=Exercice::all();

        return view('Exercice.indexexercice', compact('exercice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerexercice()
    {
        return view('Exercice.creerexercice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storeexercice(Request $request)
    {
        $request->validate([
        'EXO_DATEDEBUT'=>'required',
        'EXO_DATFIN'=>'required',
        'EXO_MONTANTDEBUT' =>'required',
        'EXO_MONTANTFIN'=>'required',
        'EXO_DEBUTSOLDETT'=>'required',
        'EXO_FINSOLDETT'=>'required',
        'EXO_ETAT'=>'required'
    ]);
      $exercice=new Exercice([
       'EXO_DATEDEBUT'=>$request->get('EXO_DATEDEBUT'),
       'EXO_DATFIN'=>$request->get('EXO_DATFIN'),
       'EXO_MONTANTDEBUT'=>$request->get('EXO_MONTANTDEBUT'),
       'EXO_MONTANTFIN'=>$request->get('EXO_MONTANTFIN'),
       'EXO_DEBUTSOLDETT'=>$request->get('EXO_DEBUTSOLDETT'),
       'EXO_FINSOLDETT'=>$request->get('EXO_FINSOLDETT'),
       'EXO_ETAT'=>$request->get('EXO_ETAT')
      ]);
       $exercice->save();
       return redirect('/creerexercice')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function showexercice($EXO_NUM)
    {
        $exercice=Exercice::find($EXO_NUM);
        return view('/indexexercice', compact('exercice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function afficherexercice($EXO_NUM)
    {
        $exercice=Exercice::find($EXO_NUM);
        return view('Exercice.afficherexercice', compact('exercice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updateexercice(Request $request, $EXO_NUM)
    {
        $request->validate([
        'EXO_DATEDEBUT'=>'required',
        'EXO_DATFIN'=>'required',
        'EXO_MONTANTDEBUT' =>'required',
        'EXO_MONTANTFIN'=>'required',
        'EXO_DEBUTSOLDETT'=>'required',
        'EXO_FINSOLDETT'=>'required',
        'EXO_ETAT'=>'required'
    ]);

      $exercice = Exercice::find($EXO_NUM);
      $exercice->EXO_DATEDEBUT = $request->get('EXO_DATEDEBUT');
      $exercice->EXO_DATFIN = $request->get('EXO_DATFIN');
      $exercice->EXO_MONTANTDEBUT= $request->get('EXO_MONTANTDEBUT');
      $exercice->EXO_MONTANTFIN= $request->get('EXO_MONTANTFIN');
      $exercice->EXO_DEBUTSOLDETT= $request->get('EXO_DEBUTSOLDETT');
      $exercice->EXO_FINSOLDETT= $request->get('EXO_FINSOLDETT');
      $exercice->EXO_ETAT= $request->get('EXO_ETAT');
      $exercice->save();

      return redirect('/indexexercice')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyexercice($EXO_NUM)
    {
     $exercice = Exercice::find($EXO_NUM);
     $exercice->delete();

     return redirect('/indexexercice')->with('success', 'Stock has been deleted Successfully');
    }
}
