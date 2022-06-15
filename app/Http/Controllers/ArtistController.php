<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        
        return view('artist.index',[
            'artists' => $artists,
            'resource' => 'artistes',
        ]);

    }

    public function indexAdminPanel()
    {
        return inertia('Admin/Artists',[
        'artists' => Artist::all(),
        'columns' => ['ID', 'Firstname', 'Lastname']
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);
        
        return view('artist.show',[
            'artist' => $artist,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        
        return view('artist.edit',[
            'artist' => $artist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation des données du formulaire
        
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $agencies_id = $request->get('agencies_id');
        
        $validated = $request->validate([
            $firstname => 'required|max:60',
            $lastname => 'max:60',
            $agencies_id => 'max:6',
        ]);

        
       

	   //Le formulaire a été validé, nous récupérons l'artiste à modifier
        $artist = Artist::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $artist->update($validated);
        // Artist::whereId($id)->update($validated);

        return view('artist.show',[
            'artist' => $artist,
        ]);

        // return redirect('/artist')->with('success', 'Artiste mis à jour avec succès');

        // return redirect()->route('artist_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
