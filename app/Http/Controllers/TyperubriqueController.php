<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typerubrique;

class TyperubriqueController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $typerubriques = Typerubrique::all();

       return view('parametres.typerubrique.index', compact('typerubriques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creertyperubrique()
    {
        return view('Typerubrique.creertyperubrique');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storetyperubrique(Request $request)
    {
        $request->validate([
        'TRB_LIB'=>'required'
    ]);
      $typerubrique=new Typerubrique([
       'TRB_LIB' => $request->get('TRB_LIB')
      ]);
       $typerubrique->save();
       return redirect('/creertyperubrique')->with('success', 'Stock has been added');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function affichertyperubrique($TRB_NUM)
    {
        $typerubrique= Typerubrique::find($TRB_NUM);
        return view('Typerubrique.affichertyperubrique', compact('typerubrique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatetyperubrique(Request $request,$TRB_NUM)
      { $request->validate([
        'TRB_LIB'=>'required'
    ]);

      $typerubrique= Typerubrique::find($TRB_NUM);
      $typerubrique->TRB_LIB = $request->get('TRB_LIB');
      $typerubrique->save();

      return redirect('/indextyperubrique')->with('success', 'la modification a été un succès ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroytyperubrique($TRB_NUM)
    {
     $typerubrique = Typerubrique::find($TRB_NUM);
     $typerubrique->delete();

     return redirect('/indextyperubrique')->with('success', 'Stock has been deleted Successfully');
    }
}
