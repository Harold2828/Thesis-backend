<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ProductDetailFilter;
use App\Http\Requests\V1\StoreProductDetailRequest;
use App\Http\Requests\UpdateProductDetailRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProductDetailCollection;
use App\Http\Resources\V1\ProductDetailResource;
use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ProductDetailFilter();
        $queryItems = $filter->transform($request);
        $productDetails = ProductDetail::where($queryItems);
        return new ProductDetailCollection($productDetails->paginate()->appends($request->query()));
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
    public function store(StoreProductDetailRequest $request)
    {
        return new ProductDetailResource(ProductDetail::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductDetail $productDetail)
    {
        return new ProductDetailResource($productDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductDetail $productDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductDetailRequest $request, ProductDetail $productDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductDetail $productDetail)
    {
        //
    }
}
