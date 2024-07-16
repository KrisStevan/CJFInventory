<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\SizesController;
class Size extends Model
{
    use HasFactory;
	
	protected $table = 'sizes';
	public $timestamps = false;
	protected $primaryKey = 'sizeID';
}
