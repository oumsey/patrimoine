<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Natureprojet;
use App\Model\Typeprojet;
use App\Http\Controllers\PDOException;

class NatureprojetController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $natureprojets = Natureprojet::all();
       //dd($agenceb);
       foreach ($natureprojets as $r) {
           $r->typeprojet=Typeprojet::find($r->TPJ_NUM);
       }
    //dd($agenceb);
       return view('parametres.natureprojet.index', compact('natureprojets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeprojet=Typeprojet::all();
        return view('parametres.natureprojet.create')->with('typeprojet', $typeprojet);
    }

    public function edit($id)
    { 
        $natureprojet = Natureprojet::findOrFail($id);
         $typeprojet=Typeprojet::all(); 
       // dd($categorie);     
        return view('parametres.natureprojet.create')->with('natureprojet', $natureprojet)
                                                       ->with('typeprojet', $typeprojet);
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
        $natureprojet = Natureprojet::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.natureprojet.index');
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
            $natureprojet = Natureprojet::findOrFail($input["NPJ_NUM"]);
            $input = $request->all();
            $natureprojet->fill($input);
            $natureprojet->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.natureprojet.index');
       
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
        $natureprojet = Natureprojet::findOrFail($id); 
        $natureprojet->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.natureprojet.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $natureprojet = Natureprojet::findOrFail($id); 
                $natureprojet->delete();
            }
        }                  
        return redirect()->route('parametres.natureprojet.index');
    }
}