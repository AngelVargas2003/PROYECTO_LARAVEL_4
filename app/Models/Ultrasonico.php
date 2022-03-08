<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ultrasonico extends Model
{
    protected $table='ultrasonicos';
    protected $primaryKey='id';
    public $timestamps=true;
    protected $fillable=['id','value','date'];
    use HasFactory;
}
