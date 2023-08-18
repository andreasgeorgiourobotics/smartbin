<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recyclebin;
use App\Models\SensorData;

class SensorDataController extends Controller
{


    public function store(Request $request, Recyclebin $recyclebin)
    {


        $sensorData = new SensorData;

        $sensorData->recyclebin_id = $recyclebin->id;

        $sensorData->distance = $request->input('distance', 0);

        $sensorData->save();

        return SensorData::find($sensorData->id);

    }

    public function showSensorPerPin(Recyclebin $recyclebin)
    {


        return $recyclebin->sensorData;
    }
}
