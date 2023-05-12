<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use App\Models\Collection;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Redirect;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.collections', ['collections' => Collection::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('collection.create',['collections'=> Collection::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollectionRequest $request)
    {
        $collection = new Collection();
        $collection->name = $request->name;

        $collection->save();

        return Redirect::route('admin.collections');
    }

    /**
     * Display the specified resource.
     */
    public function show(Collection $collection)
    {
        return view('collection.show',['collection'=> $collection]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collection $collection)
    {
        return view('collection.edit',['collection'=> $collection]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollectionRequest $request, Collection $collection)
    {
        $collection->name = $request->name;
        $collection->save();

        return Redirect::route('admin.collections');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collection $collection)
    {
        $collection->delete();
        return Redirect::route('admin.collections');

    }
}
