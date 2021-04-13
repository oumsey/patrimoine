<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Ville;
use App\Model\Region;
use App\Http\Controllers\PDOException;

class VilleController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $villes = Ville::all();
       //dd($agenceb);
       foreach ($villes as $r) {
           $r->region=Region::find($r->REG_NUM);
       }
    //dd($agenceb);
       return view('parametres.ville.index', compact('villes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region=Region::all();
        return view('parametres.ville.create')->with('region', $region);
    }

    public function edit($id)
    { 
        $ville = Ville::findOrFail($id);
         $region=Region::all(); 
       // dd($categorie);     
        return view('parametres.ville.create')->with('ville', $ville)
                                                       ->with('region', $region);
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
        $ville = Ville::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.ville.index');
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
            $ville = Ville::findOrFail($input["VIL_NUM"]);
            $input = $request->all();
            $ville->fill($input);
            $ville->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.ville.index');
       
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
        $ville = Ville::findOrFail($id); 
        $ville->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.ville.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $ville = Ville::findOrFail($id); 
                $ville->delete();
            }
        }                  
        return redirect()->route('parametres.ville.index');
    }
}