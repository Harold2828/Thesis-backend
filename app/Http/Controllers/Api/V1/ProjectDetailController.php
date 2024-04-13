<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ProjectDetailFilter;
use App\Http\Requests\V1\StoreProjectDetailRequest;
use App\Http\Requests\UpdateProjectDetailRequest;
use App\Models\ProjectDetail;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProjectDetailCollection;
use App\Http\Resources\V1\ProjectDetailResource;
use App\Http\Resources\V1\ProjectResource;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ProjectDetailFilter();
        $queryItems = $filter->transform($request);
        $projects = ProjectDetail::where($queryItems);
        return new ProjectDetailCollection($projects->paginate()->appends($request->query()));
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
    public function store(StoreProjectDetailRequest $request)
    {
        return new ProjectDetailResource(ProjectDetail::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(ProjectDetail $projectDetail)
    {
        return new ProjectResource($projectDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProjectDetail $projectDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectDetailRequest $request, ProjectDetail $projectDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProjectDetail $projectDetail)
    {
        //
    }
}
