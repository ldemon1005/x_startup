<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public const ADMIN = 1;
    public const USER = 2;

    protected $table = "accounts";
    protected $primaryKey = "id";
    protected $graud = [];
}
