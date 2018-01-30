<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCodeModel extends Model
{
	protected $table = 'ALLPRODUCTCODE';
	protected $connection = 'oracle';
	public $timestamps = false;
}
