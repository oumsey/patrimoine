<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Rubrique;
use App\Model\Typerubrique;

class RubriqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubriques=Rubrique::all();
        foreach ($rubriques as $r) {
            $r->type=Typerubrique::find($r->TRB_NUM);
            //dd($r);
        }
        return view('parametres.rubrique.index', compact('rubriques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerrubrique()
    {
        $type=Typerubrique::all();
        return view('Rubrique.creerrubrique', compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storerubrique(Request $request)
    {
        $request->validate([
        'RUB_LIB'=>'required',
        'RUB_NORME'=> 'required',
        'RUB_TAUXBONIMAX' => 'required',
        'RUB_TAUXBONIMIN'=>'required',
        'RUB_ETAT'=> 'required',
        'TRB_NUM' => 'required',
        'RUB_ACTIVER'=>'required',
        'RUB_SENS'=> 'required',
     ]);
      $rubrique=new Rubrique([
       'RUB_LIB' => $request->get('RUB_LIB'),
       'RUB_NORME'=> $request->get('RUB_NORME'),
       'RUB_TAUXBONIMAX'=> $request->get('RUB_TAUXBONIMAX'),
       'RUB_TAUXBONIMIN' => $request->get('RUB_TAUXBONIMIN'),
       'RUB_ETAT'=> $request->get('RUB_ETAT'),
       'TRB_NUM'=> $request->get('TRB_NUM'),
       'RUB_ACTIVER'=> $request->get('RUB_ACTIVER'),
       'RUB_SENS'=> $request->get('RUB_SENS'),
      ]);
       $rubrique->save();
      return redirect('/creerrubrique')->with('success', 'Stock has been added');
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
    public function afficherrubrique($RUB_NUM)
    {
         $rubrique= Rubrique::find($RUB_NUM);
         $type=Typerubrique::all();
        return view('Rubrique.afficherrubrique', ['rubrique'=>$rubrique, 'type'=>$type,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updaterubrique(Request $request, $RUB_NUM )
    {
        $request->validate([
        'RUB_LIB'=>'required',
        'RUB_NORME'=> 'required',
        'RUB_TAUXBONIMAX' => 'required',
        'RUB_TAUXBONIMIN'=>'required',
        'RUB_ETAT'=> 'required',
        'TRB_NUM' => 'required',
        'RUB_ACTIVER'=>'required',
        'RUB_SENS'=> 'required',
    ]);

      $rubrique = Rubrique::find($RUB_NUM);
      $rubrique->RUB_LIB = $request->get('RUB_LIB');
      $rubrique->RUB_NORME = $request->get('RUB_NORME');
      $rubrique->RUB_TAUXBONIMAX= $request->get('RUB_TAUXBONIMAX');
      $rubrique->RUB_TAUXBONIMIN = $request->get('RUB_TAUXBONIMIN');
      $rubrique->RUB_ETAT = $request->get('RUB_ETAT');
      $rubrique->TRB_NUM = $request->get('TRB_NUM');
      $rubrique->RUB_ACTIVER = $request->get('RUB_ACTIVER');
       $rubrique->RUB_SENS = $request->get('RUB_SENS');
      $rubrique->save();

      return redirect('/indexrubrique')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyrubrique($RUB_NUM)
    {
        $rubrique = Rubrique::find($RUB_NUM);
     $rubrique->delete();

     return redirect('/indexrubrique')->with('success', 'Stock has been deleted Successfully');
    }
}
