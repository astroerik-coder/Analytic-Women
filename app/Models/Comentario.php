<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comentario
 * 
 * @property int $ID_COM
 * @property string|null $CONTENIDO_COM
 * @property Carbon|null $FECHA_PUBLICACION_COM
 * @property int|null $REVISION_COM
 * 
 * @property Collection|Blog[] $blogs
 *
 * @package App\Models
 */
class Comentario extends Model
{
	protected $table = 'comentarios';
	protected $primaryKey = 'ID_COM';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_COM' => 'int',
		'FECHA_PUBLICACION_COM' => 'datetime',
		'REVISION_COM' => 'int'
	];

	protected $fillable = [
		'CONTENIDO_COM',
		'FECHA_PUBLICACION_COM',
		'REVISION_COM'
	];

	public function blogs()
	{
		return $this->hasMany(Blog::class, 'ID_COM');
	}
}
