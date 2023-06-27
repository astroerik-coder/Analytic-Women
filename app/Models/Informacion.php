<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Informacion
 * 
 * @property int $ID_INF
 * @property int|null $ID_RDS
 * @property int|null $ID_CONT
 * @property string|null $MISION
 * @property string|null $VISION
 * @property string|null $CULTURA_ORGANIZACIONAL
 * 
 * @property Contacto|null $contacto
 * @property RedesSociale|null $redes_sociale
 *
 * @package App\Models
 */
class Informacion extends Model
{
	protected $table = 'informacion';
	protected $primaryKey = 'ID_INF';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_INF' => 'int',
		'ID_RDS' => 'int',
		'ID_CONT' => 'int'
	];

	protected $fillable = [
		'ID_RDS',
		'ID_CONT',
		'MISION',
		'VISION',
		'CULTURA_ORGANIZACIONAL'
	];

	public function contacto()
	{
		return $this->belongsTo(Contacto::class, 'ID_CONT');
	}

	public function redes_sociale()
	{
		return $this->belongsTo(RedesSociale::class, 'ID_RDS');
	}
}
