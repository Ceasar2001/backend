<?php

namespace App\Http\Controllers\Api;

use App\Models\picture;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PicturesItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return picture::all();
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return picture::findOrFail($id);
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
        $picture = picture::findOrFail($id);

        $picture->delete();

        return $picture;
    }
}
