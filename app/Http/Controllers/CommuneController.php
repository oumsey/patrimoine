<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Commune;
use App\Model\Ville;

class CommuneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexcommune()
    {
        $commune=Commune::all();
        foreach ($commune as $r) {
            $r->ville=Ville::find($r->VIL_NUM);
            //dd($r);
        }
        return view('Commune.indexcommune', compact('commune'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creercommune()
    {
        $ville=ville::all();
        return view('Commune.creercommune', compact('ville'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storecommune(Request $request)
    {
        $request->validate([
        'COM_NOM'=>'required',
        'COM_DESCR'=> 'required',
        'VIL_NUM' => 'required'
     ]);
      $commune=new Commune([
       'COM_NOM' => $request->get('COM_NOM'),
       'COM_DESCR'=> $request->get('COM_DESCR'),
       'VIL_NUM'=> $request->get('VIL_NUM'),
      ]);
       $commune->save();
      return redirect('/creercommune')->with('success', 'Stock has been added');
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
    public function affichercommune($COM_NUM)
    {
         $commune= Commune::find($COM_NUM);
         $ville=Ville::all();
        return view('Commune.affichercommune', ['commune'=>$commune, 'ville'=>$ville,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updatecommune(Request $request, $COM_NUM )
    {
        $request->validate([
        'COM_NOM'=>'required',
        'COM_DESCR'=> 'required',
        'VIL_NUM' => 'required',
    ]);

      $commune = Commune::find($COM_NUM);
      $commune->COM_NOM = $request->get('COM_NOM');
      $commune->COM_DESCR = $request->get('COM_DESCR');
      $commune->VIL_NUM= $request->get('VIL_NUM');
      $commune->save();

      return redirect('/indexcommune')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroycommune($COM_NUM)
    {
        $commune = Commune::find($COM_NUM);
     $commune->delete();

     return redirect('/indexcommune')->with('success', 'Stock has been deleted Successfully');
    }
}
