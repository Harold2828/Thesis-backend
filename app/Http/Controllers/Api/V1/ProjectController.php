<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\ProductFilter;
use App\Http\Requests\V1\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filters\V1\ProjectFilter;
use App\Http\Resources\V1\ProjectResource;
use App\Http\Resources\V1\ProjectCollection;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new ProjectFilter();
        $queryItems = $filter->transform($request);
        $projects = Project::where($queryItems);

        $includeDetails = $request->query('includeDetails');
        if($includeDetails){

            $projects->with("details");
        }

        return new ProjectCollection($projects->paginate()->appends($request->query()));
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
    public function store(StoreProjectRequest $request)
    {
        return new ProjectResource(Project::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $includeDetails = request()->query("includeDetails");
        if($includeDetails){
            return new ProjectResource($project->loadMissing("details"));
        }
        return new ProjectResource($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
