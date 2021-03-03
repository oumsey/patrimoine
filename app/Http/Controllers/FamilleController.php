<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Famille;


class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexfamille()
    {
       $famille=Famille::all();

        return view('Famille.indexfamille', compact('famille'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creerfamille()
    {
        return view('Famille.creerfamille');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storefamille(Request $request)
    {
        $request->validate([
        'FAM_NOM'=>'required',
        'FAM_TEL'=>'required', 
        'FAM_BOITPOSTE'=>'required',
        'FAM_EMAIL'=>'required',
        'FAM_NOMRESPO'=>'required',
        'FAM_AGERETRAIT'=>'required',
        'FAM_MONTANTESCOMPTE'=>'required'
    ]);
      $famille=new Famille([
        'FAM_NOM'=>$request->get('FAM_NOM'),
        'FAM_TEL'=>$request->get('FAM_TEL'), 
        'FAM_BOITPOSTE'=>$request->get('FAM_BOITPOSTE'),
        'FAM_EMAIL'=>$request->get('FAM_EMAIL'),
        'FAM_NOMRESPO'=>$request->get('FAM_NOMRESPO'),
        'FAM_AGERETRAIT'=>$request->get('FAM_AGERETRAIT'),
        'FAM_MONTANTESCOMPTE'=>$request->get('FAM_MONTANTESCOMPTE')
      ]);
       $famille->save();
       return redirect('/creerfamille')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function showfamille($FAM_NUM)
    {
        $famille=Famille::find($FAM_NUM);
        return view('/indexfamille', compact('famille'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function afficherfamille($FAM_NUM)
    {
        $famille=Famille::find($FAM_NUM);
        return view('Famille.afficherfamille', compact('famille'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatefamille(Request $request, $FAM_NUM)
    {
        $request->validate([
        'FAM_NOM'=>'required',
        'FAM_TEL'=>'required', 
        'FAM_BOITPOSTE'=>'required',
        'FAM_EMAIL'=>'required',
        'FAM_NOMRESPO'=>'required',
        'FAM_AGERETRAIT'=>'required',
        'FAM_MONTANTESCOMPTE'=>'required'
    ]);

      $famille = Famille::find($FAM_NUM);
      $famille->FAM_NOM =$request->get('FAM_NOM');
      $famille->FAM_TEL =$request->get('FAM_TEL');
      $famille->FAM_BOITPOSTE =$request->get('FAM_BOITPOSTE');
      $famille->FAM_EMAIL =$request->get('FAM_EMAIL');
      $famille->FAM_NOMRESPO =$request->get('FAM_NOMRESPO');
      $famille->FAM_AGERETRAIT =$request->get('FAM_AGERETRAIT');
      $famille->FAM_MONTANTESCOMPTE =$request->get('FAM_MONTANTESCOMPTE');
      $famille->save();

      return redirect('/indexfamille')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroyfamille($FAM_NUM)
    {
     $famille = Famille::find($FAM_NUM);
     $famille->delete();

     return redirect('/indexfamille')->with('success', 'Stock has been deleted Successfully');
    }
}
