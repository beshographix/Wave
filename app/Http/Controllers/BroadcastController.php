<?php

namespace App\Http\Controllers;

use App\Broadcast;
use Illuminate\Http\Request;

class BroadcastController extends Controller
{

    public function __construct()
    {
        $this->middleware(['admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('broadcast.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('broadcast.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'start'     => 'required',    
            'end'       => 'required',
            'devices'   => 'required|array',    
        ]);
        
        Broadcast::create($request->all());

        return route('broadcasts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('broadcast.edit', ['broadcast' => Broadcast::find($id)]);
        
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
        $this->validate($request, [
            'start'     => 'required',    
            'end'       => 'required',
            'devices'   => 'required|array',    
        ]);

        Broadcast::find($id)->update($request->all());

        return response('Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Broadcast::find($id)->delete();
        return response('Destroyed');
    }
}
