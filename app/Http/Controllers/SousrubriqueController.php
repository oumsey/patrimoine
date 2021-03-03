<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Sousrubrique;
use App\Model\Rubrique;

class SousrubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexsousrubrique()
    {
        $sousrubriques=Sousrubrique::all();
        foreach ($sousrubriques as $r) {
            $r->rubrique=Rubrique::find($r->RUB_NUM);
            //dd($r);
        }
        return view('Sousrubrique.indexsousrubrique', compact('sousrubriques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creersousrubrique()
    {
        $rubrique=Rubrique::all();
        return view('Sousrubrique.creersousrubrique', compact('rubrique'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storesousrubrique(Request $request)
    {
        $request->validate([
        'SRB_LIB'=>'required',
        'SRB_NORME'=> 'required',
        'SRB_TAUXBONIMAX' => 'required',
        'SRB_TAUXBONIMIN'=>'required',
        'SRB_ETAT'=> 'required',
        'RUB_NUM' => 'required',
        'SRB_ACTIVER'=>'required',
     ]);
      $sousrubrique=new Sousrubrique([
       'SRB_LIB' => $request->get('SRB_LIB'),
       'SRB_NORME'=> $request->get('SRB_NORME'),
       'SRB_TAUXBONIMAX'=> $request->get('SRB_TAUXBONIMAX'),
       'SRB_TAUXBONIMIN' => $request->get('SRB_TAUXBONIMIN'),
       'SRB_ETAT'=> $request->get('SRB_ETAT'),
       'RUB_NUM'=> $request->get('RUB_NUM'),
       'SRB_ACTIVER'=> $request->get('SRB_ACTIVER'),
      ]);
       $sousrubrique->save();
      return redirect('/creersousrubrique')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function affichersousrubrique($SRB_NUM)
    {
         $sousrubrique= Sousrubrique::find($SRB_NUM);
         $rubrique=Rubrique::all();
        return view('Sousrubrique.affichersousrubrique', ['sousrubrique'=>$sousrubrique, 'rubrique'=>$rubrique,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatesousrubrique(Request $request, $SRB_NUM )
    {
        $request->validate([
        'SRB_LIB'=>'required',
        'SRB_NORME'=> 'required',
        'SRB_TAUXBONIMAX' => 'required',
        'SRB_TAUXBONIMIN'=>'required',
        'SRB_ETAT'=> 'required',
        'RUB_NUM' => 'required',
        'SRB_ACTIVER'=>'required',
    ]);

      $sousrubrique = Sousrubrique::find($SRB_NUM);
      $sousrubrique->SRB_LIB = $request->get('SRB_LIB');
      $sousrubrique->SRB_NORME = $request->get('SRB_NORME');
      $sousrubrique->SRB_TAUXBONIMAX= $request->get('SRB_TAUXBONIMAX');
      $sousrubrique->SRB_TAUXBONIMIN = $request->get('SRB_TAUXBONIMIN');
      $sousrubrique->SRB_ETAT = $request->get('SRB_ETAT');
      $sousrubrique->RUB_NUM = $request->get('RUB_NUM');
      $sousrubrique->SRB_ACTIVER = $request->get('SRB_ACTIVER');
      $sousrubrique->save();

      return redirect('/indexsousrubrique')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroysousrubrique($RUB_NUM)
    {
        $sousrubrique = Sousrubrique::find($RUB_NUM);
     $sousrubrique->delete();

     return redirect('/indexsousrubrique')->with('success', 'Stock has been deleted Successfully');
    }
}
