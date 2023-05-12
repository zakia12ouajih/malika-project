<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boock extends Model
{
    use HasFactory;
    protected $fillable = ['image','nom', 'class', 'longage', 'societe','radmk','date-isdar','page','volum','type','date-creat' ];
}

