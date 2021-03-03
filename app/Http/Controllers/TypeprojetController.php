<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typeprojet;

class TypeprojetController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indextypeprojet()
    {
       $typeprojet=Typeprojet::all();

       return view('Typeprojet.indextypeprojet', compact('typeprojet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creertypeprojet()
    {
        return view('Typeprojet.creertypeprojet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storetypeprojet(Request $request)
    {
        $request->validate([
        'TPJ_LIB'=>'required'
    ]);
      $typeprojet=new Typeprojet([
       'TPJ_LIB' => $request->get('TPJ_LIB')
      ]);
       $typeprojet->save();
       return redirect('/creertypeprojet')->with('success', 'Stock has been added');
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
    public function affichertypeprojet($TPJ_NUM)
    {
     $typeprojet= Typeprojet::find($TPJ_NUM);
        return view('Typeprojet.affichertypeprojet', compact('typeprojet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatetypeprojet(Request $request,$TPJ_NUM)
      { $request->validate([
        'TPJ_LIB'=>'required'
    ]);

      $typeprojet= Typeprojet::find($TPJ_NUM);
      $typeprojet->TPJ_LIB = $request->get('TPJ_LIB');
      $typeprojet->save();

      return redirect('/indextypeprojet')->with('success', 'la modification a été un succès ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroytypeprojet($TPJ_NUM)
    {
     $typeprojet = Typeprojet::find($TPJ_NUM);
     $typeprojet->delete();

     return redirect('/indextypeprojet')->with('success', 'Stock has been deleted Successfully');
    }
}