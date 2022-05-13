<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Oder;
use App\Http\Resources\OderResource;
use Illuminate\Http\Request;

class OderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oder = Oder::find(1);
        $user = $oder->users;
        return OderResource::collection(Oder::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oder = Oder::firstOrCreate($request->all());
        return new OderResource($oder);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oder = Oder::find($id);
        $users = $oder->users();
        dd($users);
        return new OderResource($oder);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oder $oder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oder  $oder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oder $oder)
    {
        //
    }
}
