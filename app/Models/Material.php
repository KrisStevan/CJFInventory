<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MaterialController;

class Material extends Model
{
    use HasFactory;
	
	protected $table = 'material';
	public $timestamps = false;
	protected $primaryKey = 'materialID';
}
