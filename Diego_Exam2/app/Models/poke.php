<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poke extends Model
{
    protected $table = "poke";
    protected $primarykey = "id";
    use HasFactory;
}
