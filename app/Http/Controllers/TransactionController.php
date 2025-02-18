<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function index()
    {
        $transactions = [
            [
                'product' => 'iPhone',
                'price' => 1000,
                'quantity' => 1,
                'total' => 1000,
            ],
            [
                'product' => 'iPad',
                'price' => 500,
                'quantity' => 2,
                'total' => 1000,
            ],
            [
                'product' => 'iMac',
                'price' => 2000,
                'quantity' => 1,
                'total' => 2000,
            ],
        ];

        return view('transaction')->with('transactions', $transactions);
    }
}
