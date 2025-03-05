<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Transactions;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class TransactionsController extends Controller
{
    public function index()
    {
        $transactions = Transactions::all();

        return response()->json($transactions);
    }

    public function show_transaction($id)
    {
        try {
            $customer = Customers::findOrFail($id);

            $transactions = $customer->transactions()->whereDate('created_at', Carbon::today());
            $total = $customer->transactions()->whereDate('created_at', Carbon::today())->sum('total');

            return response()->json(['transactions' => $transactions, 'total' => $total]);

        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'Transaction not found'], 404);
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
