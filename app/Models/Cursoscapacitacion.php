<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cursoscapacitacion
 * 
 * @property int $ID_CUR
 * @property int|null $ID_CLT
 * @property string|null $NOMBRE_CUR
 * @property string|null $DESCRIPCION_CUR
 * @property string|null $PUBLICO_CUR
 * @property string|null $EDAD_MINIMA_CUR
 * @property string|null $EDAD_MAXIMA_CUR
 * @property string|null $LINK_CUR
 * @property int|null $CUPOS_CUR
 * @property int|null $COSTO_CUR
 * 
 * @property Cliente|null $cliente
 * @property Collection|Pago[] $pagos
 *
 * @package App\Models
 */
class Cursoscapacitacion extends Model
{
	protected $table = 'cursoscapacitacion';
	protected $primaryKey = 'ID_CUR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CUR' => 'int',
		'ID_CLT' => 'int',
		'CUPOS_CUR' => 'int',
		'COSTO_CUR' => 'int'
	];

	protected $fillable = [
		'ID_CLT',
		'NOMBRE_CUR',
		'DESCRIPCION_CUR',
		'PUBLICO_CUR',
		'EDAD_MINIMA_CUR',
		'EDAD_MAXIMA_CUR',
		'LINK_CUR',
		'CUPOS_CUR',
		'COSTO_CUR'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'ID_CLT');
	}

	public function pagos()
	{
		return $this->hasMany(Pago::class, 'ID_CUR');
	}
}
