<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 'FT_CUSTOMERS';
    protected $connection = 'oracle';
	public $timestamps = false;
}
