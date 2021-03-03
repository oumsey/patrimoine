<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typebien;

class TypebienController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indextypebien()
    {
       $typebien=Typebien::all();

       return view('Typebien.indextypebien', compact('typebien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creertypebien()
    {
        return view('Typebien.creertypebien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storetypebien(Request $request)
    {
        $request->validate([
        'TBI_LIB'=>'required'
    ]);
      $typebien=new Typebien([
       'TBI_LIB' => $request->get('TBI_LIB')
      ]);
       $typebien->save();
       return redirect('/creertypebien')->with('success', 'Stock has been added');
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
    public function affichertypebien($TBI_NUM)
    {
        $typebien= Typebien::find($TBI_NUM);
        return view('Typebien.affichertypebien', compact('typebien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatetypebien(Request $request,$TBI_NUM)
      { $request->validate([
        'TBI_LIB'=>'required'
    ]);

      $typebien= Typebien::find($TBI_NUM);
      $typebien->TBI_LIB = $request->get('TBI_LIB');
      $typebien->save();

      return redirect('/indextypebien')->with('success', 'la modification a été un succès ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroytypebien($TBI_NUM)
    {
     $typebien = Typebien::find($TBI_NUM);
     $typebien->delete();

     return redirect('/indextypebien')->with('success', 'Stock has been deleted Successfully');
    }
}