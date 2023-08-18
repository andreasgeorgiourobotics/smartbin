<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recyclebin;

class RecyclebinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Recyclebin::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):string
    {

        $recyclebin = new Recyclebin;
        $recyclebin->number = $request->input('number', 0);
        $recyclebin->x_dimension = $request->input('x_dimension', 0);
        $recyclebin->y_dimension = $request->input('y_dimension', 0);
        $recyclebin->z_dimension = $request->input('z_dimension', 0);
        $recyclebin->location = $request->input('location', '');


        $recyclebin->save();


        return Recyclebin::find($recyclebin->id);


    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Recyclebin::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
