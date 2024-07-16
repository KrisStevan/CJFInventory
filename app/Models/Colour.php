<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ColourController;

class Colour extends Model
{
    use HasFactory;
	
	protected $table = 'colour';
	public $timestamps = false;
	protected $primaryKey = 'colourID';
}