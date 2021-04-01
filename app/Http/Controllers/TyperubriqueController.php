<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typerubrique;
use App\Http\Controllers\PDOException;

class TyperubriqueController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $typerubriques = Typerubrique::all();
      //  dd($typerubriques);
       return view('parametres.typerubrique.index', compact('typerubriques'));
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
        return view('parametres.typerubrique.create');
    }

    public function edit($id)
    { 
        $typerubrique = Typerubrique::findOrFail($id); 
       // dd($categorie);     
        return view('parametres.typerubrique.create')->with('typerubrique', $typerubrique);
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
        $typerubrique = Typerubrique::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.typerubrique.index');
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
            $typerubrique = Typerubrique::findOrFail($input["TRB_NUM"]);
            $input = $request->all();
            $typerubrique->fill($input);
            $typerubrique->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.typerubrique.index');
       
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
        $typerubrique = Typerubrique::findOrFail($id); 
        $typerubrique->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.typerubrique.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $typerubrique = Typerubrique::findOrFail($id); 
                $typerubrique->delete();
            }
        }                  
        return redirect()->route('parametres.typerubrique.index');
    }
}
