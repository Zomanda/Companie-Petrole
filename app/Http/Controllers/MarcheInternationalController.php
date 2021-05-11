<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MarcheRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use App\Models\MarcheInternational;

class MarcheInternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marches = MarcheInternational::all();

        /*Log::emergency('The system is down!');
        Log::message('On entre dans la fonction');
        Log::debug($marches);*/
        
        return View('MarcheInternational.voirMarche', compact('marches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marches = MarcheInternational::orderBy('nom')->get();
        return View('MarcheInternational.ajoutMarche');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcheRequest $request)
    {
        try {
            $marches = new MarcheInternational($request->all());
            $marches->save();
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('MarcheInternational.voirMarche')->with('message', "Ajout du marché international " . $marches->nomCompagnie . " réussi !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(MarcheInternational $marche)
    {
        return View('MarcheInternational.modifierMarche', compact('marche'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marche = MarcheInternational::findOrFail($id);
        return View('MarcheInternational.modifierMarche', compact('marche'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcheRequest $request, $id)
    {
        try
        {
            $marche = MarcheInternational::findOrFail($id);

            $marche->nomCompagnie = $request->nomCompagnie;

            $marche->save();
            return redirect()->route('MarcheInternational.voirMarche')->with('message', "Modification de " . $marche->nomCompagnie . " réussi!");
        }
        catch (\Throwable $e) {
            return redirect()->route('MarcheInternational.voirMarche')->withErrors(['La modification a échoué']);
        }
        return redirect()->route('MarcheInternational.voirMarche');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try 
        {
            $marche = MarcheInternational::findOrFail($id);

            $marche->delete();

            return redirect()->route('MarcheInternational.voirMarche')->with('message', "Suppression de " . $marche->nomCompagnie . " réussi!");
        }
        catch (\Throwable $e) {
            return redirect()->route('MarcheInternational.voirMarche')->withErrors(['La suppression a échoué']);
        }
        return redirect()->route('MarcheInternational.voirMarche');
    }
}
