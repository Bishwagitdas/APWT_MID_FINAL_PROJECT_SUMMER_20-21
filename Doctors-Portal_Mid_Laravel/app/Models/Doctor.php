<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctor';
    public $timestamps = false;
    protected $primaryKey = 'Id';
}