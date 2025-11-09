<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\check_clocks;
use Illuminate\Http\Request;

class CheckClocksController extends Controller
{
    public function index()
    {
        return check_clocks::all();
    }

    public function show($id)
    {
        return check_clocks::findOrFail($id);
    }

    public function store(Request $request)
    {
        $checkClock = check_clocks::create([
            'user_id' => $request->user_id,
            'check_clock_type' => $request->check_clock_type,
            'check_clock_time' => $request->check_clock_time
        ]);

        return response()->json($checkClock, 201);
    }

    public function update(Request $request, $id)
    {
        $checkClock = check_clocks::findOrFail($id);
        $checkClock->update($request->only(['user_id', 'check_clock_type', 'check_clock_time']));

        return response()->json($checkClock);
    }

    public function destroy($id)
    {
        $checkClock = check_clocks::findOrFail($id);
        $checkClock->delete();
        return response()->json(null, 204);
    }
}