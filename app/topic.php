<?php

namespace App;
use Illuminate\Foundation\Auth\topic as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
  use Notifiable;

    protected $table='topic';
    protected $fillable =
  [
    't_address',
    't_body',
    'c_name',
    'c_name1',
    'journalist',
    'corrector',
    't_folg',
    'd_folg',
    'c_folg',
    'c_folg1',
    'd_mark'
    
 ];
}
