<?php

namespace App\Http\Controllers;

use App\Group;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Response;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('dashboard.items.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $data = ["groups" => $groups];
        return view('dashboard.items.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $rules = [
            "name" => "required",
            "price" => "required",
            "group_id" => "required"
        ];

        $data = $this->validate($request, $rules);

        $item = Item::create($data);

        return Response::redirectTo('dashboard/items');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('dashboard.items.update')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $rules = [
            "name" => "required",
            "price" => "required"
        ];

        $data = $this->validate($request, $rules);

        $item->update($data);

        return Response::redirectTo('dashboard/items');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return Response::redirectTo('dashboard/items');
    }
}
