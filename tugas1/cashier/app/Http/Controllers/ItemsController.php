<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Items::all();

        return response()->json($items);
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'stock' => 'required',
            'price' => 'required',
        ]);

        $item = Items::create($request->all());

        return response()->json($item);
    }

    public function show($id)
    {
        try {
            $item = Items::findOrFail($id);

            return response()->json($item);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $item = Items::findOrFail($id);
            $request->validate([
                'item_name' => 'required',
                'stock' => 'required',
                'price' => 'required',
            ]);
            $item->update($request->all());

            return response()->json($item);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }

    public function delete($id)
    {
        try {
            $item = Items::findOrFail($id);
            $item->delete();

            return response()->json(['message' => 'Item deleted']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Item not found'], 404);
        }
    }
    //
}
