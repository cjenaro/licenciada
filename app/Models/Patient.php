<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function measurements()
  {
    return $this->hasMany(Measurement::class);
  }

  public function admin()
  {
    return $this->belongsTo(User::class);
  }
}
