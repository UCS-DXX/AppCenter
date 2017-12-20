<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $table = 'users';
    protected $connection = 'oracle';
    public $timestamps = false;
    public $incrementing = false;
}
