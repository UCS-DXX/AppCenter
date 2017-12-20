<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    protected $table = 'USERS';
    protected $connection = 'oracle';
    public $timestamps = false;
}
