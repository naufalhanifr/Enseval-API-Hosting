<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;

class DriverController extends Controller
{

    public function list()
    {
        return driver::all();
    }
    
    public function add(Request $request)
    {
        $driver = new driver;
        $driver->driver_name = $request->driver_name;
        $driver->phone = $request->phone;
        $driver->age = $request->age;
        $driver->status = $request->status;
        $save = $driver->save();
        if ($save) {
            return ["Result" => 'Data Berhasil Disimpan'];
        } else {
            return ["Result" => 'Data Tidak Tersimpan'];
        }
    }
}
