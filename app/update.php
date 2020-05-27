<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class update extends Model
{
  protected $fillable = [
      'Nom', 'Auteur', 'Date_creation',
  ];
}
