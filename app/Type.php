<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'product_types';
    protected $fillable = ['type_name'];
}
