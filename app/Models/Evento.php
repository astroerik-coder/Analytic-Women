<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	use HasFactory;

    protected $primaryKey = 'ID_EVT';
	
    public $timestamps = false;

    protected $table = 'eventos';

    protected $fillable = ['ID_EVT','NOMBRE_EVT','DESCRIPCION_EVT','FECHA_EVT','HORA_EVT','OBSERVACIONES_EVT','UBICACION_EVT'];
	
}
