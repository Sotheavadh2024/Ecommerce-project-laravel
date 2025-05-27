<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primaryKey = "pid";
    protected $fillable = [
        "pname",
        "pdesc",
        "enable",
        "pprice",
        "pimg",
        "cid",
        "quantity",

    ];
}