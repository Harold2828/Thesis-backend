<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\ProductFilter;
use App\Http\Resources\V1\ProductCollection;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ProductFilter();

        $queryItems = $filter->transform($request);

        if(count($queryItems) == 0){

            return new ProductCollection(Product::paginate());
        }else{

            $products = Product::where($queryItems)->paginate();
            return new ProductCollection($products->appends($request->query()));
        }
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
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
