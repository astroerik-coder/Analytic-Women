<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genero
 * 
 * @property int $ID_GEN
 * @property string|null $NOMBRE_GEN
 * 
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Genero extends Model
{
	protected $table = 'genero';
	protected $primaryKey = 'ID_GEN';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_GEN' => 'int'
	];

	protected $fillable = [
		'NOMBRE_GEN'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'ID_GEN');
	}
}
