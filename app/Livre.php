<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
  protected $fillable = [
      'id','Nom', 'Auteur', 'Date_creation',
  ];
}
