<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\check_clock_settings;
use Illuminate\Http\Request;

class CheckClockSettingsController extends Controller
{
    public function index()
    {
        return check_clock_settings::all();
    }

    public function show($id)
    {
        return check_clock_settings::findOrFail($id);
    }

    public function store(Request $request)
    {
        $checkClockSetting = check_clock_settings::create([
            'name' => $request->name,
            'type' => $request->type
        ]);

        return response()->json($checkClockSetting, 201);
    }

    public function update(Request $request, $id)
    {
        $checkClockSetting = check_clock_settings::findOrFail($id);
        $checkClockSetting->update($request->only(['name', 'type']));

        return response()->json($checkClockSetting);
    }

    public function destroy($id)
    {
        $checkClockSetting = check_clock_settings::findOrFail($id);
        $checkClockSetting->delete();
        return response()->json(null, 204);
    }
}