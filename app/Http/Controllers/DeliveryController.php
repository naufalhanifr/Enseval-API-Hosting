<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjemputan;
use App\Models\product;
use App\Models\receipts;
use Illuminate\Support\Facades\DB;
use App\Models\delivery;

class DeliveryController extends Controller
{

    public function list()
    {
        return delivery::all();
    }

    public function add(Request $request)
    {
        $penjemputan = new delivery;
        $penjemputan->driver_id = $request->driver_id;
        $penjemputan->product_id = $request->product_id;
        $penjemputan->vehicle_id = $request->vehicle_id;
        $penjemputan->delivery_type = $request->delivery_type;
        $penjemputan->destination_location = $request->destination_location;
        $penjemputan->pickup_location = $request->pickup_location;
        $penjemputan->date_pickup = $request->date_pickup;
        $penjemputan->fuel_consumption = $request->fuel_consumption;
        $penjemputan->cost = $request->cost;
        $save = $penjemputan->save();
        if ($save) {
            return ["Result" => 'Data Berhasil Disimpan'];
        } else {
            return ["Result" => 'Data Tidak Tersimpan'];
        }
    }


    public function byid($id, Request $request)
    {
        $receipt = DB::table('delivery')
            ->where('delivery_id', '=',  $id)
            ->get();
        return $receipt;
    }




    // public function receipt()
    // {
    //     $receipt = DB::table('delivery')
    //         ->join('product', 'penjemputan_id', '=', 'product.id')
    //         ->join('vehicle', 'penjemputan_id', '=', 'vehicle.id')
    //         ->join('driver', 'penjemputan_id', '=', 'driver.id')
    //         ->select(
    //             'product.product_name',
    //             'driver.driver_name',
    //             'vehicle.type',
    //             'vehicle.fuel_capacity',
    //             'penjemputan.fuel_consumption',
    //             // 'penjemputan.cost',
    //             'penjemputan.speed_avg',
    //             'penjemputan.pickup_location',
    //             'penjemputan.destination_location',
    //             'penjemputan.date_pickup',
    //             'penjemputan.date_arrived'
    //         )
    //         ->get();
    //     return $receipt;
    // }

    public function update(Request $request, $id)
    {
        $save = DB::table('delivery')->where('delivery_id', '=', $id)->update([
            'destination_location' => $request->destination_location,
            // 'pickup_location' => $request->pickup_location
        ]);

        if ($save) {
            return ["Result" => 'Data Berhasil Disimpan'];
        } else {
            return ["Result" => 'Data Berhasil Tersimpan'];
        }
    }

    public function delete($id)
    {
        $save = DB::table('delivery')->where('delivery_id', '=', $id)->delete();
        if ($save) {
            return ["Result" => 'Data Berhasil Didelete'];
        } else {
            return ["Result" => 'Data Tidak Terdelete'];
        }
    }
}
