<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemLaundry extends Model
{
    use HasFactory;
    //fillable fields
    protected $fillable = ['name', 'price', 'description'];
}
