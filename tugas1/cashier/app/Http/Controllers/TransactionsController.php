<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Items;
use App\Models\Transactions;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();

        return response()->json($transactions);
    }

    public function show($id)
    {
        try {
            $customer = Customers::findOrFail($id);

            $transactions = Transactions::whereDate('created_at', Carbon::today())->get();
            $total = $customer->items()->whereDate('transactions.created_at', Carbon::today())->sum('total');

            return response()->json(['transactions' => $transactions, 'total' => $total]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
    }

    public function store(Request $request, $id)
    {
        try {
            $customer = Customers::findOrFail($id);

            $request->validate([
                'item_id' => 'required',
                'quantity' => 'required',
            ]);

            $item = Items::findOrFail($request->input('item_id'));
            $total = (float) $item->price * (float) $request->input('quantity');

            $customer->items()->attach($request->input('item_id'), ['quantity' => $request->input('quantity'), 'total' => $total]);

            return response()->json('Item Added Successfull');
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    public function delete($id)
    {
        try {
            $transaction = Transactions::findOrFail($id);
            $transaction->delete();

            return response()->json(['message' => 'Transaction deleted']);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
    }
}
