<?php

namespace App\Http\Controllers;

use App\Domains\Tank\Data\TankData;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTanksRequest;
use App\Http\Requests\UpdateTanksRequest;
use App\Models\Tanks;
use Illuminate\Http\JsonResponse;
use Inertia\Inertia;

class TanksController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @throws \Exception
     */
    public function index()
    {

//        $tanks = TankData::from(Tanks::first());
//        $tanks = TankData::from(Tanks::first())->transform();
//        return response()->json($tanks);

        return Inertia::render('Tank/Edit', [
//            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
//            'status' => session('status'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TankData $tankData
     * @return JsonResponse
     */
    public function store(TankData $tankData): JsonResponse
    {
        $tank = $tankData->toArray()->save();

        return response()->json($tank);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        $item = Tanks::query()->findOrFail($id);
        return response()->json(compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param TankData $tankData
     * @return JsonResponse
     */
    public function update(int $id, TankData $tankData): JsonResponse
    {
        $item = Tanks::query()->findOrFail($id);
        $item->update($tankData->toArray());
        return response()->json($tankData->toArray());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $item = Tanks::query()->findOrFail($id);
        $item->delete();
        return response()->json('Error', 400);
    }
}
