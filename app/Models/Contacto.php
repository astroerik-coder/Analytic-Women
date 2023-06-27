<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contacto
 * 
 * @property int $ID_CONT
 * @property string|null $NOMBRE_CONT
 * @property string|null $TELEFONO1_CONT
 * @property string|null $TELEFONO2_CONT
 * @property string|null $EMAIL1_CONT
 * @property string|null $EMAIL2_CONT
 * 
 * @property Collection|Informacion[] $informacions
 *
 * @package App\Models
 */
class Contacto extends Model
{
	protected $table = 'contacto';
	protected $primaryKey = 'ID_CONT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CONT' => 'int'
	];

	protected $fillable = [
		'NOMBRE_CONT',
		'TELEFONO1_CONT',
		'TELEFONO2_CONT',
		'EMAIL1_CONT',
		'EMAIL2_CONT'
	];

	public function informacions()
	{
		return $this->hasMany(Informacion::class, 'ID_CONT');
	}
}
