<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
  protected $fillable = [
  'oznDvorana',
    'dan',
    'predmet'
  ];
  public $timestamps = false;
}