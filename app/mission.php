<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    protected $table='mission';
    protected $fillable =
  [
    'm_address',
    'm_describe',
    'c_name',
    'c_name1',
    'm_person',
    'c_folg'
 ];
}
