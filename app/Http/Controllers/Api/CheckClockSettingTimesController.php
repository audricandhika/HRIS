<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\check_clock_setting_times;
use Illuminate\Http\Request;

class CheckClockSettingTimesController extends Controller
{
    public function index()
    {
        return check_clock_setting_times::all();
    }

    public function show($id)
    {
        return check_clock_setting_times::findOrFail($id);
    }

    public function store(Request $request)
    {
        $checkClockSettingTime = check_clock_setting_times::create([
            'ck_settings_id' => $request->ck_settings_id,
            'day' => $request->day,
            'clock_in' => $request->clock_in,
            'clock_out' => $request->clock_out,
            'break_start' => $request->break_start,
            'break_end' => $request->break_end
        ]);

        return response()->json($checkClockSettingTime, 201);
    }

    public function update(Request $request, $id)
    {
        $checkClockSettingTime = check_clock_setting_times::findOrFail($id);
        $checkClockSettingTime->update($request->only([
            'ck_settings_id',
            'day',
            'clock_in',
            'clock_out',
            'break_start',
            'break_end'
        ]));

        return response()->json($checkClockSettingTime);
    }

    public function destroy($id)
    {
        $checkClockSettingTime = check_clock_setting_times::findOrFail($id);
        $checkClockSettingTime->delete();
        return response()->json(null, 204);
    }
}