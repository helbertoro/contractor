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

        $image = \Request::file('picture');
        $filename = time() . $image->GetClientOriginalName();
        $path = 'images/fotos_contratistas/' . $filename;
        \Image::make($image->GetRealPath())->widen(500)->save($path);

        $carnet = new Carnet;
        $carnet->fill($data);

        $carnet->save();
        return 'ok';
    }
}
