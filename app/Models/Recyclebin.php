<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SensorData;

class Recyclebin extends Model
{
    use HasFactory;



    public function sensorData()
    {

        return $this->hasMany(SensorData::class);
    }

}
