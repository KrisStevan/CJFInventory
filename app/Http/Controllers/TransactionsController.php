<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\Transaction;
use Illuminate\Support\Facades\Redirect;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::join('produk', 'produk.productID', '=', 'transactions.productID')
					->select(
						'transactions.trxCode',
						'produk.productName', 
						'transactions.trxDate', 
						'transactions.orderQty'
					)
					->orderBy('transactions.trxDate', 'DESC')
					->get();

		return view('transactions.index', compact('transaction'));
    }
	
    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        $product = Product::all();
		
		return view('transactions.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $transaction = new Transaction();
		$transaction->trxID = $request->trxID;
		$transaction->trxCode = $request->trxCode;
		$transaction->productID = $request->productID;
		$transaction->trxDate = $request->trxDate;
		$transaction->orderQty = $request->orderQty;
		
		$transaction->save();
		
		return Redirect::to('transactions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $search1 = $request->input('searchAwal');
        $search2 = $request->input('searchAkhir');
		
		$transaction = Transaction::join('produk', 'produk.productID', '=', 'transactions.productID')
					->select(
						'transactions.trxCode',
						'produk.productName', 
						'transactions.trxDate', 
						'transactions.orderQty'
					)
					->where('trxDate', '>=', "{$search1}")
                    ->where('trxDate', '<=', "{$search2}")
					->orderBy('transactions.trxDate', 'DESC')
					->get();
		
		return view('transactions.index', ['transaction' => $transaction]);
    }
}
