<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\TransactionsController;

class Transaction extends Model
{
    use HasFactory;
	protected $table = 'transactions';
	public $timestamps = false;
	protected $fillable = [
    	'productID'
    ];
	protected $primaryKey = 'trxID';
}