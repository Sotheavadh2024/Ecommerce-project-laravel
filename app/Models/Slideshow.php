<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slideshow extends Model
{
    use HasFactory;
    protected $table = "slideshow";
    protected $primaryKey = "ssid";
    protected $fillable = [
        "title",
        "subtitle",
        "text",
        "enable",
        "img",
        "ssorder",    
    ];
}