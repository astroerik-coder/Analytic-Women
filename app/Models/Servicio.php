<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Servicio
 * 
 * @property int $ID_SER
 * @property int|null $ID_CLT
 * @property string|null $NOMBRE_SER
 * @property string|null $DESCRIPCION_SER
 * @property string|null $OBSERVACIONES_SER
 * 
 * @property Cliente|null $cliente
 *
 * @package App\Models
 */
class Servicio extends Model
{
	protected $table = 'servicios';
	protected $primaryKey = 'ID_SER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SER' => 'int',
		'ID_CLT' => 'int'
	];

	protected $fillable = [
		'ID_CLT',
		'NOMBRE_SER',
		'DESCRIPCION_SER',
		'OBSERVACIONES_SER'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'ID_CLT');
	}
}
