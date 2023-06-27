<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 * 
 * @property int $ID_EMPR
 * @property string|null $NOMBRE_EMPR
 * @property string|null $LOGO_EMPR
 * 
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Empresa extends Model
{
	protected $table = 'empresa';
	protected $primaryKey = 'ID_EMPR';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_EMPR' => 'int'
	];

	protected $fillable = [
		'NOMBRE_EMPR',
		'LOGO_EMPR'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'ID_EMPR');
	}
}
