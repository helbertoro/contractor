<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarnetController extends Controller
{
    public function test() {
        return 'ok';
    }

    public function carneIdcbis(Request $request) {
        $data = $request->all();
        return response()->json($data);
    }
}
