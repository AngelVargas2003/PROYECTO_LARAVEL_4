<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataUltrasonic extends Model
{
    protected $table='data_ultrasonics';
    protected $fillable=['id','date','value'];
    protected $primaryKey='id';
    public $timestamps=true;
    use HasFactory;
}
