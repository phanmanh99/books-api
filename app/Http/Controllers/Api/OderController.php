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
        return new OderResource($oder);
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
        $oder = Oder::find($id);
        $oder->update($request->all());
        return new OderResource($oder);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Oder::whereId($id)->delete();
            return response()->json(["destroy" => "OK"], \Illuminate\Http\Response::HTTP_OK);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(["destroy" => "ERROR"], \Illuminate\Http\Response::HTTP_OK);
        }
    }
}
