<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\KindController;

class Kind extends Model
{
    use HasFactory;
	
	protected $table = 'kind';
	public $timestamps = false;
	protected $primaryKey = 'kindID';
}
