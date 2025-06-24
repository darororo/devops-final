<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyModelRequest;
use App\Http\Requests\UpdateMyModelRequest;
use App\Models\MyModel;

class MyModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMyModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MyModel $myModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyModel $myModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMyModelRequest $request, MyModel $myModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyModel $myModel)
    {
        //
    }
}
