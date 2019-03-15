<?php

namespace App\Http\Controllers;

use App\Group;
use App\Item;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SiteController extends Controller
{
    public function store(){

        return view("site.store");
    }
    

    public function getGroupItems(Group $group){

        $items = Item::where('group_id',$group->id)->get();
        $response = [
            "items" => $items
        ];
        //or
//        $items = $group->items();
//        $response = ["items" => $items];

        return Response::json($response);
    }



    public function getGroups(){

        $groups = Group::all();
        $response = [
            "groups" => $groups
        ];
        return Response::json($response);

    }
    public function getItems(){
        $items = Item::all();
        $response = [
            "items" => $items
        ];
        return Response::json($response);
    }

    public function home(){
        return view('site.home');
    }
    public function welcome(){

        return view('welcome');
    }


    public function order(Request $request, $postId){
        
        $data = [
            "user_id" => 1,//auth()->id(),
            "item_id" => $postId
        ];

        $order = Order::create($data);

        return Response::json();
    }
}
