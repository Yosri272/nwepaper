<?php

namespace App;
use Illuminate\Foundation\Auth\topicsave as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class topicsave extends Model
{
    protected $table='topicsave';
    protected $fillable =
  [
    't_address',
    't_body',
    'c_name',
    'c_name1'
    
 ];
}
