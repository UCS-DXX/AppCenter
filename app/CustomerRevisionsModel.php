<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerRevisionsModel extends Model
{
    protected $table = 'FT_CUSTOMERS_REVISIONS';
    protected $connection = 'oracle';
    public $timestamps = false;
}
