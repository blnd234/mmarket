<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sell extends Model
{
    
    
public $table='sell';


 protected $fillable = ['name', 'quantity', 'grain', 'price'];
}
