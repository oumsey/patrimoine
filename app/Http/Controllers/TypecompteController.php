<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typecompte;
use App\Http\Controllers\PDOException;

class TypecompteController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $typecomptes = Typecompte::all();
      //  dd($typerubriques);
       return view('parametres.typecompte.index', compact('typecomptes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd("MANCI");
        return view('parametres.typecompte.create');
    }

    public function edit($id)
    { 
        $typecompte = Typecompte::findOrFail($id); 
       // dd($categorie);     
        return view('parametres.typecompte.create')->with('typecompte', $typecompte);
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
        $typecompte = Typecompte::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.typecompte.index');
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
            $typecompte = Typecompte::findOrFail($input["TCP_NUM"]);
            $input = $request->all();
            $typecompte->fill($input);
            $typecompte->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.typecompte.index');
       
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
        $typecompte= Typecompte::findOrFail($id); 
        $typecompte->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.typecompte.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $typecompte = Typecompte::findOrFail($id); 
                $typecompte->delete();
            }
        }                  
        return redirect()->route('parametres.typecompte.index');
    }
}