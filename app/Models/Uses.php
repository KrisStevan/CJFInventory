<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\UsesController;

class Uses extends Model
{
    use HasFactory;
	
	protected $table = 'use';
	public $timestamps = false;
	protected $primaryKey = 'useID';
}