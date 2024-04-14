<?php

namespace App\Http\Controllers;

use App\Domains\Testing\Data\TestData;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTestsRequest;
use App\Http\Requests\UpdateTestsRequest;
use App\Models\Tests;
use Illuminate\Http\JsonResponse;

class TestsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $test  = TestData::collect(Tests::all());
//        $test  =Tests::first();

        return response()->json($test);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTestsRequest $request
     * @return JsonResponse
     */
    public function store(CreateTestsRequest $request)
    {
        $item = new Tests;
        $item->fill($request->validated());
        $item->save();
        return response()->json(compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $item = Tests::query()->findOrFail($id);
        return response()->json(compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param UpdateTestsRequest $request
     * @return JsonResponse
     */
    public function update($id, UpdateTestsRequest $request)
    {
        $item = Tests::query()->findOrFail($id);
        $item->update($request->validated());
        return response()->json(compact('item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy($id)
    {
        return response()->json('Error', 400);
    }
}
