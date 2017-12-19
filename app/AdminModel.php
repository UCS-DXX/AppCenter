<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    protected $table = "ADMIN";
    protected $connection = 'oracle';
    protected $fillable = ['USER_ID','PASSWORD','STATUS'];
    public $timestamps = FALSE;
}
