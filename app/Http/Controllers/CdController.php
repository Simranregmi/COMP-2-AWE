<?php

namespace App\Http\Controllers;

use App\Models\Cd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $cds = Cd::latest()->paginate();
        return view ('products.cd.list',[
            'cds' => $cds
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('isAdmin', auth()->user());
        return view('products.cd.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' =>'required',
            'price' =>'required|numeric',
            'playlength' =>'required|numeric',

        ]);
        Cd::create($data);
        return redirect('/cds');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function show(Cd $cd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function edit(Cd $cd)
    {
        Gate::authorize('isAdmin', auth()->user());
        return view('products.cd.edit',['cd'=>$cd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cd $cd)
    {
        Gate::authorize('isAdmin', auth()->user());
        $data = $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' =>'required',
            'price' =>'required|numeric',
            'playlength' =>'required|numeric',

        ]);
        $cd->update($data);
        return redirect('/cds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cd  $cd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cd $cd)
    {
        Gate::authorize('isAdmin', auth()->user());
        $cd->delete();
        return redirect('/cds');
    }
}
