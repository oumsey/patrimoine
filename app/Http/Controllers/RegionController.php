<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Region;
use App\Model\Pays;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexregion()
    {
        $region=Region::all();
        foreach ($region as $r) {
            $r->pays=Pays::find($r->PAY_NUM);
            //dd($r);
        }
        return view('Region.indexregion', compact('region'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerregion()
    {
        $pays=Pays::all();
        return view('Region.creerregion', compact('pays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storeregion(Request $request)
    {
        $request->validate([
        'REG_NOM'=>'required',
        'REG_DESCR'=> 'required',
        'PAY_NUM' => 'required'
     ]);
      $region=new Region([
       'REG_NOM' => $request->get('REG_NOM'),
       'REG_DESCR'=> $request->get('REG_DESCR'),
       'PAY_NUM'=> $request->get('PAY_NUM'),
      ]);
       $region->save();
      return redirect('/creerregion')->with('success', 'Stock has been added');
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
    public function afficherregion($REG_NUM)
    {
         $region= Region::find($REG_NUM);
         $pays=Pays::all();
        return view('Region.afficherregion', ['region'=>$region, 'pays'=>$pays,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateregion(Request $request, $REG_NUM )
    {
        $request->validate([
        'REG_NOM'=>'required',
        'REG_DESCR'=> 'required',
        'PAY_NUM' => 'required',
    ]);

      $region = Region::find($REG_NUM);
      $region->REG_NOM = $request->get('REG_NOM');
      $region->REG_DESCR = $request->get('REG_DESCR');
      $region->PAY_NUM= $request->get('PAY_NUM');
      $region->save();

      return redirect('/indexregion')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyregion($REG_NUM)
    {
        $region = Region::find($REG_NUM);
     $region->delete();

     return redirect('/indexregion')->with('success', 'Stock has been deleted Successfully');
    }
}
