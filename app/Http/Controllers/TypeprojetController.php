<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Typeprojet;
use App\Http\Controllers\PDOException;

class TypeprojetController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $typeprojets = Typeprojet::all();
      //  dd($typerubriques);
       return view('parametres.typeprojet.index', compact('typeprojets'));
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
        return view('parametres.typeprojet.create');
    }

    public function edit($id)
    { 
        $typeprojet = Typeprojet::findOrFail($id); 
       // dd($categorie);     
        return view('parametres.typeprojet.create')->with('typeprojet', $typeprojet);
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
        $typeprojet = Typeprojet::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.typeprojet.index');
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
            $typeprojet = Typeprojet::findOrFail($input["TPJ_NUM"]);
            $input = $request->all();
            $typeprojet->fill($input);
            $typeprojet->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.typeprojet.index');
       
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
        $typeprojet= Typeprojet::findOrFail($id); 
        $typeprojet->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.typeprojet.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $typeprojet = Typeprojet::findOrFail($id); 
                $typeprojet->delete();
            }
        }                  
        return redirect()->route('parametres.typeprojet.index');
    }
}