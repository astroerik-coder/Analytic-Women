<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pago
 * 
 * @property int|null $ID_EMP
 * @property int|null $ID_CUR
 * @property int $ID_PAG
 * @property string|null $NOMBRE_PAG
 * @property string|null $METODO_PAG
 * @property Carbon|null $FECHA_PAG
 * @property float|null $MONTO_PAG
 * 
 * @property Empleo|null $empleo
 * @property Cursoscapacitacion|null $cursoscapacitacion
 *
 * @package App\Models
 */
class Pago extends Model
{
	protected $table = 'pago';
	protected $primaryKey = 'ID_PAG';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_EMP' => 'int',
		'ID_CUR' => 'int',
		'ID_PAG' => 'int',
		'FECHA_PAG' => 'datetime',
		'MONTO_PAG' => 'float'
	];

	protected $fillable = [
		'ID_EMP',
		'ID_CUR',
		'NOMBRE_PAG',
		'METODO_PAG',
		'FECHA_PAG',
		'MONTO_PAG'
	];

	public function empleo()
	{
		return $this->belongsTo(Empleo::class, 'ID_EMP');
	}

	public function cursoscapacitacion()
	{
		return $this->belongsTo(Cursoscapacitacion::class, 'ID_CUR');
	}
}
