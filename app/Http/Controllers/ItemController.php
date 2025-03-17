<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        // Fetch all items from the database
        $items = Item::all(); // You can also use pagination if needed

        // Pass the items to the view
        return view('items.index', compact('items'));
    }
  
}
