<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Pays;


class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexpays()
    {
       $pays=Pays::all();

        return view('Pays.indexpays', compact('pays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerpays()
    {
        return view('Pays.creerpays');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storepays(Request $request)
    {
        $request->validate([
        'PAY_NOM'=>'required',
        'PAY_NATIONALITE'=> 'required'
    ]);
      $pays=new Pays([
       'PAY_NOM' => $request->get('PAY_NOM'),
       'PAY_NATIONALITE'=> $request->get('PAY_NATIONALITE'),
      ]);
       $pays->save();
       return redirect('/creerpays')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function showpays($PAY_NUM)
    {
        $pays=Pays::find($PAY_NUM);
        return view('/indexpays', compact('pays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function afficherpays($PAY_NUM)
    {
        $pays= Pays::find($PAY_NUM);
        return view('Pays.afficherpays', compact('pays'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatepays(Request $request, $PAY_NUM)
    {
        $request->validate([
        'PAY_NOM'=>'required',
        'PAY_NATIONALITE'=> 'required'
    ]);

      $pays = Pays::find($PAY_NUM);
      $pays->PAY_NOM = $request->get('PAY_NOM');
      $pays->PAY_NATIONALITE = $request->get('PAY_NATIONALITE');
      $pays->save();

      return redirect('/indexpays')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroypays($PAY_NUM)
    {
     $pays = Pays::find($PAY_NUM);
     $pays->delete();

     return redirect('/indexpays')->with('success', 'Stock has been deleted Successfully');
    }
}
