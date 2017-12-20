<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCodeModel extends Model
{
	protected $table = 'PRODCUT_CODE';
	protected $connection = 'oracle';
	public $timestamps = false;
}
