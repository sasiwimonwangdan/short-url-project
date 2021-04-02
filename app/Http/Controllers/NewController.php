<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function index(){
        return view('example.index');
    }
    public function input (Request $request){
        $URL = new URL;
        $URL->long_url = $request->get('URL');
        $id_num = 340;
        $length = 3;
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $URL->short_url = "short.local/gt/$id_num$randomString";
        $URL->save();

        return redirect('/new');
    }

}
