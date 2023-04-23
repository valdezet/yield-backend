<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tasks\TaskFormRequest;
use App\Http\Resources\Tasks\UserTaskResource;
use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): ResourceCollection
    {
        //
        $tasks = Task::paginate(10);
        return UserTaskResource::collection($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskFormRequest $request): JsonResponse
    {
        //
        $newTask = Task::create($request->validated());
        return response()->json([
            'success' => true,
            'data' => new UserTaskResource($newTask)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
