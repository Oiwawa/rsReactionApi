<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kblais\Uuid\Uuid;

class Reaction extends Model
{
    use HasFactory, Uuid;

    protected $fillable = [
      'name',

    ];
}
