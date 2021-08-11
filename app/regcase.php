<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regcase extends Model
{
    protected $table='regcase';
    protected $fillable =
  [
    'journalist',
    'r_address',
    'r_reason'
    
 ];
}
