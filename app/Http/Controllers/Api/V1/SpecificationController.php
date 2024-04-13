<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\SpecificationFilter;
use App\Http\Requests\V1\StoreSpecificationRequest;
use App\Http\Requests\UpdateSpecificationRequest;
use App\Models\Specification;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\SpecificationCollection;
use App\Http\Resources\V1\SpecificationResource;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new SpecificationFilter();
        $queryItems = $filter->transform($request);

        $providers = Specification::where($queryItems);

        return new SpecificationCollection($providers->paginate()->appends($request->query()));
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
    public function store(StoreSpecificationRequest $request)
    {
        return new SpecificationResource(Specification::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Specification $specification)
    {
        
        return new SpecificationResource($specification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specification $specification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSpecificationRequest $request, Specification $specification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specification $specification)
    {
        //
    }
}
