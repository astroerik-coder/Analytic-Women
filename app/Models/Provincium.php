<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Provincium
 * 
 * @property int $ID_PRO
 * @property string|null $NOMBRE_PRO
 * 
 * @property Collection|Ciudad[] $ciudads
 * @property Collection|Cliente[] $clientes
 *
 * @package App\Models
 */
class Provincium extends Model
{
	protected $table = 'provincia';
	protected $primaryKey = 'ID_PRO';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PRO' => 'int'
	];

	protected $fillable = [
		'NOMBRE_PRO'
	];

	public function ciudads()
	{
		return $this->hasMany(Ciudad::class, 'ID_PRO');
	}

	public function clientes()
	{
		return $this->hasMany(Cliente::class, 'ID_PRO');
	}
}
