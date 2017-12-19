<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $connection = 'oracle';
	protected $table = 'TEST';
}
