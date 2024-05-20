<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//inputLaundryKiloan model
use App\Models\inputLaundryKiloan;
//item laundry model
use App\Models\itemLaundry;

class inputLaundryKiloanController extends Controller
{
    //index
    public function index()
    {
        //ambil semua items
        $items = itemLaundry::all();
        return view('input_laundry_kiloan.index', ['items' => $items]);
    }

    //search name
    public function search_name($nama)
    {
        //search item by name
        $items = itemLaundry::where('name', 'like', '%' . $nama . '%')->get();
        return response()->json($items);
    }

    //search barcode
    public function search_barcode($barcode)
    {
        //search item by barcode
        $items = itemLaundry::where('barcode', 'like', '%' . $barcode . '%')->get();
        return response()->json($items);
    }
}
