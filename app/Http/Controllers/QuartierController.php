<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Quartier;
use App\Model\Commune;

class QuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexquartier()
    {
        $quartier=Quartier::all();
        foreach ($quartier as $r) {
            $r->commune=Commune::find($r->COM_NUM);
            //dd($r);
        }
        return view('Quartier.indexquartier', compact('quartier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerquartier()
    {
        $commune=Commune::all();
        return view('Quartier.creerquartier', compact('commune'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storequartier(Request $request)
    {
        $request->validate([
        'QRT_NOM'=>'required',
        'QRT_DESCR'=> 'required',
        'COM_NUM' => 'required'
     ]);
      $quartier=new Quartier([
       'QRT_NOM' => $request->get('QRT_NOM'),
       'QRT_DESCR'=> $request->get('QRT_DESCR'),
       'COM_NUM'=> $request->get('COM_NUM'),
      ]);
       $quartier->save();
      return redirect('/creerquartier')->with('success', 'Stock has been added');
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
    public function afficherquartier($QRT_NUM)
    {
         $quartier= Quartier::find($QRT_NUM);
         $commune=Commune::all();
        return view('Quartier.afficherquartier', ['quartier'=>$quartier, 'commune'=>$commune,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatequartier(Request $request, $QRT_NUM )
    {
        $request->validate([
        'QRT_NOM'=>'required',
        'QRT_DESCR'=> 'required',
        'COM_NUM' => 'required',
    ]);

      $quartier = Quartier::find($QRT_NUM);
      $quartier->QRT_NOM = $request->get('QRT_NOM');
      $quartier->QRT_DESCR = $request->get('QRT_DESCR');
      $quartier->COM_NUM= $request->get('COM_NUM');
      $quartier->save();

      return redirect('/indexquartier')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyquartier($QRT_NUM)
    {
        $quartier = Quartier::find($QRT_NUM);
     $quartier->delete();

     return redirect('/indexquartier')->with('success', 'Stock has been deleted Successfully');
    }
}
