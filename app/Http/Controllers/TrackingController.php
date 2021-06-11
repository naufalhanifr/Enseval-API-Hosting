<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tracking;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{

    public function list()
    {
        return tracking::all();
    }

    public function add(Request $request)
    {
        $track = new tracking;
        $track->temperature = $request->temperature;
        $track->distance_from_destination = $request->distance_from_destination;
        $track->fuel_capacity = $request->fuel_capacity;
        $track->fuel_consumption = $request->fuel_consumption;
        $track->estimate_arrival_date = $request->estimate_arrival_date;
        $track->speed_avg = $request->speed_avg;
        $track->delivery_id = $request->delivery_id;
        $save = $track->save();
        if ($save) {
            return ["Result" => 'Data Berhasil Disimpan'];
        } else {
            return ["Result" => 'Data Tidak Tersimpan'];
        }
    }
}
