<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'Country';
    protected $primaryKey = 'Code';
    public $incrementing = false;
    protected $keyTypr = 'string';
   

}
