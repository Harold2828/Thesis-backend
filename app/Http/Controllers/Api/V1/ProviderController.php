<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreProviderRequest;
use App\Http\Requests\UpdateProviderRequest;
use App\Models\Provider;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProviderResource;
use App\Http\Resources\V1\ProviderCollection;
use Illuminate\Http\Request;
use App\Filters\V1\ProviderFilter;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $filter = new ProviderFilter();
        $queryItems = $filter->transform($request);

        $includeProducts = $request->query("includeProducts");

        $providers = Provider::where($queryItems);
        if($includeProducts){
            $providers = $providers->with("products");
        }

        return new ProviderCollection($providers->paginate()->appends($request->query()));
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
    public function store(StoreProviderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Provider $provider)
    {
        $includeProducts = request()->query("includeProducts");

        if($includeProducts){

            return new ProviderResource($provider->loadMissing("products"));
        }

        return new ProviderResource($provider);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provider $provider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProviderRequest $request, Provider $provider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provider $provider)
    {
        //
    }
}
