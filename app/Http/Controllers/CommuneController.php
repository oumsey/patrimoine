<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Commune;
use App\Model\Ville;
use App\Http\Controllers\PDOException;

class CommuneController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $communes = Commune::all();
       //dd($agenceb);
       foreach ($communes as $r) {
           $r->ville=Ville::find($r->VIL_NUM);
       }
    //dd($agenceb);
       return view('parametres.commune.index', compact('communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ville=Ville::all();
        return view('parametres.commune.create')->with('ville', $ville);
    }

    public function edit($id)
    { 
        $commune = Commune::findOrFail($id);
         $ville=Ville::all(); 
       // dd($categorie);     
        return view('parametres.commune.create')->with('commune', $commune)
                                                       ->with('ville', $ville);
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
        $commune = Commune::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.commune.index');
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
            $commune = Commune::findOrFail($input["COM_NUM"]);
            $input = $request->all();
            $commune->fill($input);
            $commune->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.commune.index');
       
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
        $commune = Commune::findOrFail($id); 
        $commune->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.commune.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $commune = Commune::findOrFail($id); 
                $commune->delete();
            }
        }                  
        return redirect()->route('parametres.commune.index');
    }
}