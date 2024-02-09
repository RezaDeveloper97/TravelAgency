<?php

namespace App\Http\Controllers;

use App\Models\onlineAssessmentModel;
use App\Http\Requests\StoreonlineAssessmentModelRequest;
use App\Http\Requests\UpdateonlineAssessmentModelRequest;

class OnlineAssessmentModelController extends Controller
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
    public function store(StoreonlineAssessmentModelRequest $request)
    {
        dd('ss');
    }

    /**
     * Display the specified resource.
     */
    public function show(onlineAssessmentModel $onlineAssessmentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(onlineAssessmentModel $onlineAssessmentModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateonlineAssessmentModelRequest $request, onlineAssessmentModel $onlineAssessmentModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(onlineAssessmentModel $onlineAssessmentModel)
    {
        //
    }
}
