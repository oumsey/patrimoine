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
    //     $request->validate([
    //     'TRB_LIB'=>'required'
    // ]);
    //   $typerubrique=new Typerubrique([
    //    'TRB_LIB' => $request->get('TRB_LIB')
    //   ]);
    //    $typerubrique->save();
    //    return redirect('/creertyperubrique')->with('success', 'Stock has been added');
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

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function affichertyperubrique($TRB_NUM)
    {
        $typerubrique= Typerubrique::find($TRB_NUM);
        return view('Typerubrique.affichertyperubrique', compact('typerubrique'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function updatetyperubrique(Request $request,$TRB_NUM)
      { $request->validate([
        'TRB_LIB'=>'required'
    ]);

      $typerubrique= Typerubrique::find($TRB_NUM);
      $typerubrique->TRB_LIB = $request->get('TRB_LIB');
      $typerubrique->save();

      return redirect('/indextyperubrique')->with('success', 'la modification a été un succès ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroytyperubrique($TRB_NUM)
    {
     $typerubrique = Typerubrique::find($TRB_NUM);
     $typerubrique->delete();

     return redirect('/indextyperubrique')->with('success', 'Stock has been deleted Successfully');
    }
}
