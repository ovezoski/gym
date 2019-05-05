<?php

namespace App\Http\Controllers;

use App\Bodybuilder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BodybuilderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bodybuilders = DB::table('Bodybuilders')->latest()->simplePaginate(5);

        return view('home', compact('bodybuilders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodybuilder.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         Bodybuilder::create(

            $request->validate([
                'name' => 'required',
                'username' => 'max:30'
            ])

        );

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bodybuilder  $bodybuilder
     * @return \Illuminate\Http\Response
     */
    public function show(Bodybuilder $bodybuilder)
    {
        $subscriptions = $bodybuilder->subscriptions;
        return view('bodybuilder.show', compact('bodybuilder', 'subscriptions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bodybuilder  $bodybuilder
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodybuilder $bodybuilder)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bodybuilder  $bodybuilder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodybuilder $bodybuilder)
    {
        //
    }

    public function subscribe(Bodybuilder $bodybuilder)
    {
        $bodybuilder->subscribe();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bodybuilder  $bodybuilder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodybuilder $bodybuilder)
    {
        //
    }
}
