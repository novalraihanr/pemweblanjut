<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = Customers::all();

        return response()->json($customers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'is_member' => 'required',
        ]);

        $customer = Customers::create($request->all());

        return response()->json($customer);
    }

    public function show($id)
    {
        try {
            $customer = Customers::findOrFail($id);

            return response()->json($customer);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $customer = Customers::findOrFail($id);
            $request->validate([
                'name' => 'required',
            ]);
            $customer->update($request->all());

            return response()->json($customer);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    public function delete($id)
    {
        try {
            $customer = Customers::findOrFail($id);
            $customer->delete();

            return response()->json(['message' => 'Customer deleted']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }
}
