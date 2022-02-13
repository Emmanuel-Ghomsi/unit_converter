<?php

namespace App\Http\Controllers;

use App\Models\Convertion;
use App\Models\Device;
use Illuminate\Http\Request;

class ConvertionController extends Controller
{
    public function index() {
        $devices = Device::all();

        return view('welcome', compact('devices'));
    }

    public function converter(Request $request) {
        $convertion = Convertion::where([
            ['device_id_1', $request->device_1],
            ['device_id_2', $request->device_2],
        ])->first();

        if(!is_null($convertion))
            $amount_converter = $request->amount * $convertion->rate;
        else {
            $convertion = Convertion::where([
                ['device_id_1', $request->device_2],
                ['device_id_2', $request->device_1],
            ])->first();

            if(!is_null($convertion))
                $amount_converter = $request->amount / $convertion->rate;
            else
                $amount_converter = "Nous ne pouvons effectuer la convertion";
        }

        $devices = Device::all();

        session()->flashInput($request->input());

        return view('welcome', compact('devices', 'amount_converter'));
    }
}
