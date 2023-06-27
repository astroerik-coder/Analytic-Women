<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 * 
 * @property int $ID_EVT
 * @property string|null $NOMBRE_EVT
 * @property string|null $DESCRIPCION_EVT
 * @property Carbon|null $FECHA_EVT
 * @property Carbon|null $HORA_EVT
 * @property string|null $OBSERVACIONES_EVT
 * @property string|null $UBICACION_EVT
 *
 * @package App\Models
 */
class Evento extends Model
{
	protected $table = 'eventos';
	protected $primaryKey = 'ID_EVT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_EVT' => 'int',
		'FECHA_EVT' => 'datetime',
		'HORA_EVT' => 'datetime'
	];

	protected $fillable = [
		'NOMBRE_EVT',
		'DESCRIPCION_EVT',
		'FECHA_EVT',
		'HORA_EVT',
		'OBSERVACIONES_EVT',
		'UBICACION_EVT'
	];
}
