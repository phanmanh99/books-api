<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OderBookResource;
use App\Models\OderBook;
use Illuminate\Http\Request;

class OderBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OderBookResource::collection(OderBook::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oderbook = OderBook::firstOrCreate($request->all());
        return new OderBookResource($oderbook);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oderbook = OderBook::find($id);
        return new OderBookResource($oderbook);
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
        $oderbook = OderBook::find($id);
        $oderbook->update($request->all());
        return new OderBookResource($oderbook);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OderBook::whereId($id)->delete();
        return response()->json(["destroy" => "OK"], \Illuminate\Http\Response::HTTP_OK);
    }
}
