<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    //seguridad al hacer post a la base de datos
    protected $fillable = ['title','slug','content','description','category_id','posted','image'];
}
