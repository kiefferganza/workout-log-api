<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use App\Http\Requests\StoreExerciseRequest;
use App\Http\Requests\UpdateExerciseRequest;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Exercise::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreExerciseRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreExerciseRequest $request)
    {
        $data = Exercise::create($request->validated());
        return response()->json(['message' => 'Successfully Created Exercise', 'data' => $data]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Exercise $exercise)
    {
        return response()->json(['Success' => true, 'data' => $exercise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateExerciseRequest $request
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateExerciseRequest $request, Exercise $exercise)
    {
        $exercise->update($request->only(['name', 'category_id']));
        return response()->json(['message' => 'Exercise Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return response()->json(['message' => 'Successfully Deleted Exercise']);
    }
}
