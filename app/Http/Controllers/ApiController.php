<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test() {
        $data = [
            'name' => 'helber',
            'lastname' => 'toro'
        ];

        return response()->json($data);
    }

    public function carneIdcbis(Request $request) {
        $data = $request->all();
        return response()->json($data);
    }
}
