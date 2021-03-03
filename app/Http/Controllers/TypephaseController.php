<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typephase;

class TypephaseController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indextypephase()
    {
       $typephase=Typephase::all();

       return view('Typephase.indextypephase', compact('typephase'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creertypephase()
    {
        return view('Typephase.creertypephase');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storetypephase(Request $request)
    {
        $request->validate([
        'TPH_LIB'=>'required'
    ]);
      $typephase=new Typephase([
       'TPH_LIB' => $request->get('TPH_LIB')
      ]);
       $typephase->save();
       return redirect('/creertypephase')->with('success', 'Stock has been added');
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
    public function affichertypephase($TPH_NUM)
    {
     $typephase= Typephase::find($TPH_NUM);
        return view('Typephase.affichertypephase', compact('typephase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatetypephase(Request $request,$TPH_NUM)
      { $request->validate([
        'TPH_LIB'=>'required'
    ]);

      $typephase= Typephase::find($TPH_NUM);
      $typephase->TPH_LIB = $request->get('TPH_LIB');
      $typephase->save();

      return redirect('/indextypephase')->with('success', 'la modification a été un succès ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroytypephase($TPH_NUM)
    {
     $typephase = Typephase::find($TPH_NUM);
     $typephase->delete();

     return redirect('/indextypephase')->with('success', 'Stock has been deleted Successfully');
    }
}