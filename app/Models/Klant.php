<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    protected $table = 'klanten';

    protected $fillable = ['naam', 'leeftijd', 'email', 'profilepic'];
}
