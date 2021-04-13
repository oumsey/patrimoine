<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Quartier;
use App\Model\Commune;
use App\Http\Controllers\PDOException;

class QuartierController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $quartiers = Quartier::all();
       //dd($agenceb);
       foreach ($quartiers as $r) {
           $r->commune=Commune::find($r->COM_NUM);
       }
    //dd($agenceb);
       return view('parametres.quartier.index', compact('quartiers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commune=Commune::all();
        return view('parametres.quartier.create')->with('commune', $commune);
    }

    public function edit($id)
    { 
        $quartier = Quartier::findOrFail($id);
         $commune=Commune::all(); 
       // dd($categorie);     
        return view('parametres.quartier.create')->with('quartier', $quartier)
                                                       ->with('commune', $commune);
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
        $quartier = Quartier::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.quartier.index');
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
            //dd($input);            
            $quartier = Quartier::findOrFail($input["QRT_NUM"]);
            $input = $request->all();
            $quartier->fill($input);
            $quartier->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.quartier.index');
       
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
        $quartier = Quartier::findOrFail($id); 
        $quartier->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.quartier.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $quartier = Quartier::findOrFail($id); 
                $quartier->delete();
            }
        }                  
        return redirect()->route('parametres.quartier.index');
    }
}