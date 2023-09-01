<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hirer extends Model
{
    use HasFactory;
    protected $table = "hirers";
    protected $primarykey="id";
}
