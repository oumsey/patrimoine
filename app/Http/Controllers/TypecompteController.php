<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typecompte;

class TypecompteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indextypecompte()
    {
       $typecompte=Typecompte::all();

       return view('Typecompte.indextypecompte', compact('typecompte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creertypecompte()
    {
        return view('Typecompte.creertypecompte');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storetypecompte(Request $request)
    {
        $request->validate([
        'TCP_LIB'=>'required'
    ]);
      $typecompte=new Typecompte([
       'TCP_LIB' => $request->get('TCP_LIB')
      ]);
       $typecompte->save();
       return redirect('/creertypecompte')->with('success', 'Stock has been added');
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
    public function affichertypecompte($TCP_NUM)
    {
     $typecompte= Typecompte::find($TCP_NUM);
        return view('Typecompte.affichertypecompte', compact('typecompte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatetypecompte(Request $request,$TCP_NUM)
      { $request->validate([
        'TCP_LIB'=>'required'
    ]);

      $typecompte= Typecompte::find($TCP_NUM);
      $typecompte->TCP_LIB = $request->get('TCP_LIB');
      $typecompte->save();

      return redirect('/indextypecompte')->with('success', 'la modification a été un succès ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroytypecompte($TCP_NUM)
    {
     $typecompte = Typecompte::find($TCP_NUM);
     $typecompte->delete();

     return redirect('/indextypecompte')->with('success', 'Stock has been deleted Successfully');
    }
}