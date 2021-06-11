<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicle;

class VehicleController extends Controller
{
    public function list()
    {
        return vehicle::all();
    }
    
    public function add(Request $request)
    {
        $vehicle = new vehicle;
        $vehicle->type = $request->type;
        $vehicle->capacity = $request->capacity;
        $vehicle->status = $request->status;
        $vehicle->fuel_capacity = $request->fuel_capacity;
        $vehicle->brand = $request->brand;
        $save = $vehicle->save();
        if ($save) {
            return ["Result" => 'Data Berhasil Disimpan'];
        } else {
            return ["Result" => 'Data Tidak Tersimpan'];
        }
    }
}
