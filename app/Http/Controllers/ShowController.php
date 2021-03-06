<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();

        return view('show.index',[
            'shows' => $shows,
            'resource' => 'spectacles',
        ]);
    }

    public function indexAdminPanel()
    {

        $shows = Show::all();
        $locationsOfShows = [];

        foreach ($shows as $show){
            array_push($locationsOfShows, $show->location);
        }

        return inertia('Admin/Shows',[
        'shows' => $shows,
        'columns' => ['ID', 'Slug', 'Titre', 'Déscription', 'Location', 'Réservable', 'Prix'],
        'locationsOfShows' => $locationsOfShows
        ]);
    }

    public function indexVue()
    {
        $shows = Show::all();

        return inertia('Homepage',[
        'shows' => $shows,
        'resource' => 'spectacles'
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
        $show = Show::find($id);
        return view('show.show',[
           'show' => $show,
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
}
