<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 * 
 * @property int $ID_CLT
 * @property int|null $ID_EMPR
 * @property int|null $ID_GEN
 * @property int|null $ID_PRO
 * @property int|null $ID_EMP
 * @property string|null $NOMBRE_CLT
 * @property Carbon|null $FECHA_NACIMIENTO_CLT
 * @property string|null $TELEFONO1_CLT
 * @property string|null $TELEFONO2_CLT
 * @property string|null $EMAIL_CLT
 * @property string|null $TITULO_CLT
 * @property string|null $ROL_CLT
 * @property string|null $EXPERIENCIA_CLT
 * @property string|null $FOTO_CLT
 * 
 * @property Empresa|null $empresa
 * @property Genero|null $genero
 * @property Provincium|null $provincium
 * @property Empleo|null $empleo
 * @property Collection|Blog[] $blogs
 * @property Collection|Cursoscapacitacion[] $cursoscapacitacions
 * @property Collection|Servicio[] $servicios
 *
 * @package App\Models
 */
class Cliente extends Model
{
	public $sortBy; // Agrega esta línea para definir la variable $sortBy

	protected $table = 'cliente';
	protected $primaryKey = 'ID_CLT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CLT' => 'int',
		'ID_EMPR' => 'int',
		'ID_GEN' => 'int',
		'ID_PRO' => 'int',
		'ID_EMP' => 'int',
		'FECHA_NACIMIENTO_CLT' => 'datetime'
	];

	protected $fillable = [
		'ID_EMPR',
		'ID_GEN',
		'ID_PRO',
		'ID_EMP',
		'NOMBRE_CLT',
		'FECHA_NACIMIENTO_CLT',
		'TELEFONO1_CLT',
		'TELEFONO2_CLT',
		'EMAIL_CLT',
		'TITULO_CLT',
		'ROL_CLT',
		'EXPERIENCIA_CLT',
		'FOTO_CLT'
	];

	public function empresa()
	{
		return $this->belongsTo(Empresa::class, 'ID_EMPR');
	}

	public function genero()
	{
		return $this->belongsTo(Genero::class, 'ID_GEN');
	}

	public function provincium()
	{
		return $this->belongsTo(Provincium::class, 'ID_PRO');
	}

	public function empleo()
	{
		return $this->belongsTo(Empleo::class, 'ID_EMP');
	}

	public function blogs()
	{
		return $this->hasMany(Blog::class, 'ID_CLT');
	}

	public function cursoscapacitacions()
	{
		return $this->hasMany(Cursoscapacitacion::class, 'ID_CLT');
	}

	public function servicios()
	{
		return $this->hasMany(Servicio::class, 'ID_CLT');
	}
}
