<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Region;
use App\Model\Pays;
use App\Http\Controllers\PDOException;

class RegionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $regions =Region::all();
       //dd($region);
       foreach ($regions as $r) {
           $r->pays=Pays::find($r->PAY_NUM);
       }
    //dd($agenceb);
       return view('parametres.region.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pays = Pays::all();
        return view('parametres.region.create')->with('pays', $pays);
    }

    public function edit($id)
    { 
        $region = Region::findOrFail($id);
         $pays=Pays::all(); 
       // dd($categorie);     
        return view('parametres.region.create')->with('region', $region)
                                                       ->with('pays', $pays);
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
        $region = Region::create($input);        
       if ($request->ajax() || $request->is('api/*')) {
           return response()->json(['success'=>'Got Simple Ajax Request.']);            
       } else {            
           $request->session()->flash('success', 'Enregistrement effectué avec succès');           
           return redirect()->route('parametres.region.index');
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
            $region = Region::findOrFail($input["REG_NUM"]);
            $input = $request->all();
            $region->fill($input);
            $region->update();                
            $request->session()->flash('success', 'Modification effectué avec succès');           
            return redirect()->route('parametres.region.index');
       
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
        $region = Region::findOrFail($id); 
        $region->delete();
        //dd($categorie);     
       // $request->session()->flash('success', 'Modification effectué avec succès');           
        return redirect()->route('parametres.region.index');
    }

    public function deletes(Request $request)
    {   //dd($request);
        $input = $request->all(); 
        $d = $input["d"];
        //dd($d);
        if(!empty($d)) {
            foreach ($d as $id) {
                $region = Region::findOrFail($id); 
                $region->delete();
            }
        }                  
        return redirect()->route('parametres.region.index');
    }
}