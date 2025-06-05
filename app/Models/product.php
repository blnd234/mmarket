<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //

    public $table='product';


 protected $fillable = ['name', 'quantity', 'grain', 'price'];
}
