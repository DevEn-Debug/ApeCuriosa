<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Honey extends Model
{
  protected $fillable = [
    'title',
    'type',
    'weight',
    'price',
    'available',
    'image',
    'description'
  ];
}
