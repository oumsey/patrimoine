<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Ville;
use App\Model\Region;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexville()
    {
        $ville=Ville::all();
        foreach ($ville as $r) {
            $r->region=Region::find($r->REG_NUM);
            //dd($r);
        }
        return view('Ville.indexville', compact('ville'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerville()
    {
        $region=Region::all();
        return view('Ville.creerville', compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storeville(Request $request)
    {
        $request->validate([
        'VIL_NOM'=>'required',
        'VIL_DESCR'=> 'required',
        'REG_NUM' => 'required'
     ]);
      $ville=new Ville([
       'VIL_NOM' => $request->get('VIL_NOM'),
       'VIL_DESCR'=> $request->get('VIL_DESCR'),
       'REG_NUM'=> $request->get('REG_NUM'),
      ]);
       $ville->save();
      return redirect('/creerville')->with('success', 'Stock has been added');
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
    public function afficherville($VIL_NUM)
    {
         $ville= Ville::find($VIL_NUM);
         $region=Region::all();
        return view('Ville.afficherville', ['ville'=>$ville, 'region'=>$region,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateville(Request $request, $VIL_NUM )
    {
        $request->validate([
        'VIL_NOM'=>'required',
        'VIL_DESCR'=> 'required',
        'REG_NUM' => 'required',
    ]);

      $ville = Ville::find($VIL_NUM);
      $ville->VIL_NOM = $request->get('VIL_NOM');
      $ville->VIL_DESCR = $request->get('VIL_DESCR');
      $ville->REG_NUM= $request->get('REG_NUM');
      $ville->save();

      return redirect('/indexville')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyville($VIL_NUM)
    {
        $ville = Ville::find($VIL_NUM);
     $ville->delete();

     return redirect('/indexville')->with('success', 'Stock has been deleted Successfully');
    }
}
