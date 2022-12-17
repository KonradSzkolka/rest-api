<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Person extends Model
{
    public $timestamps = false;
    protected $fillable = ['name','surname','email','phone','address','city','country'];

    protected $table = 'peoples'; 
}