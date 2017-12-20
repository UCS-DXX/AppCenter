<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionModel extends Model
{
	protected $table = 'FUNDS_TRANSFERS';
	protected $connection = 'oracle';
	public $timestamps = false;
}
