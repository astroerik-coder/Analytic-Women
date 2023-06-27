<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleo
 * 
 * @property int $ID_EMP
 * @property string|null $NOMBRE_EMP
 * @property string|null $DESCRIPCION_EMP
 * @property string|null $MODALIDAD_EMP
 * @property Carbon|null $HORARIO_EMP
 * @property Carbon|null $FECHA_PUBLICACION_EMP
 * @property int|null $EXPERIENCIA_EMP
 * 
 * @property Collection|Cliente[] $clientes
 * @property Collection|Pago[] $pagos
 *
 * @package App\Models
 */
class Empleo extends Model
{
	protected $table = 'empleo';
	protected $primaryKey = 'ID_EMP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_EMP' => 'int',
		'HORARIO_EMP' => 'datetime',
		'FECHA_PUBLICACION_EMP' => 'datetime',
		'EXPERIENCIA_EMP' => 'int'
	];

	protected $fillable = [
		'NOMBRE_EMP',
		'DESCRIPCION_EMP',
		'MODALIDAD_EMP',
		'HORARIO_EMP',
		'FECHA_PUBLICACION_EMP',
		'EXPERIENCIA_EMP'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'ID_EMP');
	}

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'ID_EMP');
	}
}
