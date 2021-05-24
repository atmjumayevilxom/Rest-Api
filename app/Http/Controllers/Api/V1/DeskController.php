<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Desk;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\DeskResource;
use App\Http\Requests\DeskStoreRequest;

class DeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DeskResource::collection(Desk::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeskStoreRequest $request)
    {
        //     $created_desk = Desk::create($request->all());
        return new DeskResource(Desk::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Desk $desk)
    {
        return new DeskResource($desk);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeskStoreRequest $request, Desk $desk)
    {
        $desk->update($request->validated());
        return new DeskResource($desk);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desk $desk)
    {
        $desk->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
