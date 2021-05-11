<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GisementRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;
use App\Models\Gisement;

class GisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gisements = Gisement::all();


        try {
            $gisements = Gisement::where('noGisement', $gisements)->firstOrFail();
        }
        catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e)
        {
            
        }
        catch (\Throwable $e) {
            \Log::error('Erreur inattendue : ', [$e]);
        }
        /*Log::emergency('The system is down!');
        Log::message('On entre dans la fonction');
        Log::debug($gisements);*/
        
        return View('Gisement.voirGisement', compact('gisements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gisements = Gisement::orderBy('noGisement')->get();
        return View('Gisement.ajoutGisement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GisementRequest $request)
    {
        try {
            $gisements = new Gisement($request->all());
            $gisements->save();
        }
        catch (\Throwable $e) {
            //Gérer l'erreur
            Log::debug($e);
        }
        return redirect()->route('Gisement.voirGisement')->with('message', "Ajout du gisement " . $gisements->pays . " réussi !");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gisement $gisement)
    {
        return View('Gisement.modifierGisement', compact('gisement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gisement = Gisement::findOrFail($id);
        return View('Gisement.modifierGisement', compact('gisement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GisementRequest $request, $id)
    {
        try
        {
            $gisement = Gisement::findOrFail($id);

            $gisement->pays = $request->pays;

            $gisement->save();
            return redirect()->route('Gisement.voirGisement')->with('message', "Modification de " . $gisement->pays . " réussi!");
        }
        catch (\Throwable $e) {
            return redirect()->route('Gisement.voirGisement')->withErrors(['La modification a échoué']);
        }
        return redirect()->route('Gisement.voirGisement');
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
            $gisement = Gisement::findOrFail($id);

            $gisement->delete();

            return redirect()->route('Gisement.voirGisement')->with('message', "Suppression de " . $gisement->pays . " réussi!");
        }
        catch (\Throwable $e) {
            return redirect()->route('Gisement.voirGisement')->withErrors(['La suppression a échoué']);
        }
        return redirect()->route('Gisement.voirGisement');
    }
}
