<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carnet;

class CarnetController extends Controller
{
    public function test() {
        return view('test');
    }

    public function carneIdcbis(Request $request) {
        $data = $request->all();
        $carnet = new Carnet;
        $carnet->fill($data);

        $carnet->save();
        return 'ok';
        /* return response()->json($data); */
    }
}
