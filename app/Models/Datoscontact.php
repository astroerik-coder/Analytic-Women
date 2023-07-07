<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Datoscontact extends Model
{
    //use HasFactory;
    protected $table="contactanos";
    protected $primaryKey="id";
    protected $fillable=['nombre','apellidos','email','password','confirmacion','created_at','updated_at'];
    public $timestamps=false;
}
