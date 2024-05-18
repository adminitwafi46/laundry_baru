<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//itemLaundry model
use App\Models\itemLaundry;

class itemController extends Controller
{
    //index
    public function index()
    {
        //get all items
        $items = itemLaundry::all();
        //return view with items
        return view('item.index', ['items' => $items]);
    }

    //store
    public function store(Request $request)
    {
        //validate request
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
        $price = $request->price;
        //if price is not set, set it to 0
        if ($price == null) {
            $request->price = 0;
        }
        //create item
        itemLaundry::create($request->all());
        //return is a response with success message
        return response()->json(['message' => 'Item created successfully']);

    }

    //index_getall
    public function index_getall()
    {
        //get all items
        $items = itemLaundry::all();
        //return items as json
        return response()->json($items);
    }

    //show
    public function show($id)
    {
        //get item by id
        $item = itemLaundry::find($id);
        //return item as json
        return response()->json($item);
    }

    //update
    public function update(Request $request, itemLaundry $item)
    {
        //validate request
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
        $price = $request->price;
        //if price is not set, set it to 0
        if ($price == null) {
            $request->price = 0;
        }
        //update item
        $item->update($request->all());
        //return is a response with success message
        return response()->json(['message' => 'Item updated successfully']);
    }
}
