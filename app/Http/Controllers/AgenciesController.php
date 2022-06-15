<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agencies;
use App\Models\Artist;

class AgenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agencies::all();
        
        return view('agencies.index',[
            'agencies' => $agencies,
            'resource' => 'Agences',
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
        $agencies = Agencies::find($id);
        
        return view('agencies.show',[
            'agencies' => $agencies,
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
        //
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
        //
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

    // public function testartist($id) {
    //     $artist=Artist::find($id);
        
    //     return view ('artist.show',[
    //         'artist' => $artist,
    //         'resource' => 'Agences',
    //     ]);
    // }

    // public function show($id)
    // {
    //     $agencies = Agencies::find($id);
        
    //     return view('agencies.show',[
    //         'agencies' => $agencies,
    //     ]);    

    // }
}
