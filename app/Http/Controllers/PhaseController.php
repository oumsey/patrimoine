<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Phase;
use App\Model\Typephase;
use App\Http\Controllers\PDOException;

class PhaseController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $phases = Phase::all();
       //dd($agenceb);
       foreach ($phases as $r) {
           $r->typephase=Typephase::find($r->TPH_NUM);
       }
    //dd($agenceb);
       return view('parametres.phase.index', compact('phases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typephase=Typephase::all();
        return view('parametres.phase.create')->with('typephase', $typephase);
    }

    public function edit($id)
    { 
        $phase = Phase::findOrFail($id);
         $typephase=Typephase::all(); 
       // dd($categorie);     
        return view('parametres.phase.create')->with('phase', $phase)
                                                       ->with('typephase', $typephase);
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
        $phase = Phase::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.phase.index');
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
            $phase = Phase::findOrFail($input["PHA_NUM"]);
            $input = $request->all();
            $phase->fill($input);
            $phase->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.phase.index');
       
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
        $phase = Phase::findOrFail($id); 
        $phase->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.phase.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $phase = Phase::findOrFail($id); 
                $phase->delete();
            }
        }                  
        return redirect()->route('parametres.phase.index');
    }
}