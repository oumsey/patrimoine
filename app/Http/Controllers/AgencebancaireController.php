<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Agencebancaire;
use App\Model\Banque;
use App\Http\Controllers\PDOException;

class AgencebancaireController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $agenceb = Agencebancaire::all();
       //dd($agenceb);
       foreach ($agenceb as $r) {
           $r->banque=Banque::find($r->BQE_NUM);
       }
    //dd($agenceb);
       return view('parametres.agencebancaire.index', compact('agenceb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banque=Banque::all();
        return view('parametres.agencebancaire.create')->with('banque', $banque);
    }

    public function edit($id)
    { 
        $agenceb = Agencebancaire::findOrFail($id);
         $banque=Banque::all(); 
       // dd($categorie);     
        return view('parametres.agencebancaire.create')->with('agenceb', $agenceb)
                                                       ->with('banque', $banque);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try { 
        $input = $request->all();   
        $agenceb = Agencebancaire::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.agencebancaire.index');
       }
       }catch(PDOException $exception) {
//            DB::rollBack();
           if ($request->ajax()) {
               return response()->json(['success' => false, 'refresh' => false, 'message' => "Erreur lors du traitement de la requête sur le serveur."]);
           } else {
               return redirect()->back()->with('error', "Erreur lors du traitement de la requête sur le serveur.");
           }
       }
    }

    public function update(Request $request)
    {   
      try { 
            $input = $request->all();             
            $agenceb = Agencebancaire::findOrFail($input["AGB_NUM"]);
            $input = $request->all();
            $agenceb->fill($input);
            $agenceb->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.agencebancaire.index');
       
        }catch(PDOException $exception) {
            if ($request->ajax()) {
                return response()->json(['success' => false, 'refresh' => false, 'message' => "Erreur lors du traitement de la requête sur le serveur."]);
            } else {
                return redirect()->back()->with('error', "Erreur lors du traitement de la requête sur le serveur.");
            }
        }
       
    }

    public function delete($id)
    { 
        $agenceb = Agencebancaire::findOrFail($id); 
        $agenceb->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.agencebancaire.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $agenceb = Agencebancaire::findOrFail($id); 
                $agenceb->delete();
            }
        }                  
        return redirect()->route('parametres.agencebancaire.index');
    }
}