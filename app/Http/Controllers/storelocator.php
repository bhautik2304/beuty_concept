<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{storeaddress,map};
class storelocator extends Controller
{
    //
    public function index(Request $req){
       $store= storeaddress::store($req->store)->city($req->city)->get();
       $ifram= map::IframStore($req->store)->IframCity($req->city)->get();

    //    $data=[
    //        "store"=>$store
    //    ];
        return response([
            "store"=>$store,
            "ifram"=>$ifram
        ],200);
    }
}
