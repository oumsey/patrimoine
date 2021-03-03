<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Model\Membre;
use App\Model\Famille;
use App\Model\Quartier;


class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function indexmembre()
    {
       $membre=Membre::all();
       foreach ($membre as $mb) {
           $mb->famille=Famille::find($mb->FAM_NUM);
           $mb->quartier=Quartier::fin($mb->QRT_NUM);
       }

        return view('Membre.indexmembre', compact('membre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function creermembre()
    {
        $famille=Famille::all();
        $quartier=Quartier::all()
        return view('Membre.creermembre', ['famille'=>$famille, 'quartier'=>$quartier,]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function storemembre(Request $request)
    {
        $request->validate([
        'MBR_NOM'=>'required',
        'MBR_PRE'=>'required',
        'MBR_DATNAIS'=>'required',
        'MBR_LIEUNAIS'=>'required',
        'MBR_EMAIL'=>'required',
        'MBR_SEX'=>'required',
        'MBR_PROF'=>'required',
        'MBR_CIVILITE'=>'required',
        'MBR_LIENDEPAREN'=>'required',
        'FAM_NUM'=>'required',
        'QRT_NUM'=>'required'
    ]);
      $membre=new Membre([
        'MBR_NOM'=>$request->get('MBR_NOM'),
        'MBR_PRE'=>$request->get('MBR_PRE'),
        'MBR_DATNAIS'=>$request->get('MBR_DATNAIS'),
        'MBR_LIEUNAIS'=>$request->get('MBR_LIEUNAIS'),
        'MBR_EMAIL'=>$request->get('MBR_EMAIL'),
        'MBR_SEX'=>$request->get('MBR_SEX'),
        'MBR_PROF'=>$request->get('MBR_PROF'),
        'MBR_CIVILITE'=>$request->get('MBR_CIVILITE'),
        'MBR_LIENDEPAREN'=>$request->get('MBR_LIENDEPAREN'),
        'FAM_NUM'=>$request->get('FAM_NUM'),
        'QRT_NUM'=>$request->get('QRT_NUM')
      ]);
       $membre->save();
       return redirect('/creermembre')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function showmembre($MBR_NUM)
    {
        $membre=Membre::find($MBR_NUM);
        return view('/indexmembre', compact('membre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function affichermembre($MBR_NUM)
    {
        $membre=Membre::find($MBR_NUM);
        $famille=Famille::all();
        $quartier=Quartier::all();
        return view('Membre.affichermembre', ['membre'=>$membre, 'famille'=>$famille, 'quartier'=>$quartier, ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatemembre(Request $request, $MBR_NUM)
    {
        $request->validate([
         'MBR_NOM'=>'required',
        'MBR_PRE'=>'required',
        'MBR_DATNAIS'=>'required',
        'MBR_LIEUNAIS'=>'required',
        'MBR_EMAIL'=>'required',
        'MBR_SEX'=>'required',
        'MBR_PROF'=>'required',
        'MBR_CIVILITE'=>'required',
        'MBR_LIENDEPAREN'=>'required',
        'FAM_NUM'=>'required',
        'QRT_NUM'=>'required'
    ]);

      $membre = Membre::find($MBR_NUM);
      $membre->MBR_NOM =$request->get('MBR_NOM');
      $membre->MBR_PRE =$request->get('MBR_PRE');
      $membre->MBR_DATNAIS =$request->get('MBR_DATNAIS');
      $membre->MBR_LIEUNAIS=$request->get('MBR_LIEUNAIS');
      $membre->MBR_EMAIL=$request->get('MBR_EMAIL');
      $membre->MBR_SEX=$request->get('MBR_SEX');
      $membre->MBR_PROF =$request->get('MBR_PROF');
      $membre->MBR_CIVILITE =$request->get('MBR_CIVILITE');
      $membre->MBR_LIENDEPAREN =$request->get('MBR_LIENDEPAREN');
      $membre->FAM_NUM =$request->get('FAM_NUM');
      $membre->QRT_NUM=$request->get('QRT_NUM');
      $membre->save();

      return redirect('/indexmembre')->with('success', 'Stock has been ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroymembre($MBR_NUM)
    {
     $membre = Membre::find($MBR_NUM);
     $membre->delete();

     return redirect('/indexmembre')->with('success', 'Stock has been deleted Successfully');
    }
}
