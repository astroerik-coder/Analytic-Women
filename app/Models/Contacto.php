<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //use HasFactory;
    protected $table="datoscontact";
    protected $primaryKey="id";
    protected $fillable=['nombre','email','direccion','mensaje','created_at','updated_at'];
    public $timestamps=false;
}
