<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProductController;

class Product extends Model
{
    use HasFactory;
	protected $table = 'produk';
	public $timestamps = false;
	protected $fillable = [
		'productCode',
    	'productName',
		'productKind',
		'productMaterial',
		'productColour',
		'productUse',
		'productSize'
    ];
	protected $primaryKey = 'productID';
}