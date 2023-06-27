<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Blog
 * 
 * @property int $ID_BLG
 * @property int|null $ID_CLT
 * @property int|null $ID_COM
 * @property int|null $ID_CAT
 * @property string|null $TITULO_BLG
 * @property int|null $VALORACION_BLG
 * 
 * @property Comentario|null $comentario
 * @property Cliente|null $cliente
 * @property Categoria|null $categoria
 *
 * @package App\Models
 */
class Blog extends Model
{
	protected $table = 'blog';
	protected $primaryKey = 'ID_BLG';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_BLG' => 'int',
		'ID_CLT' => 'int',
		'ID_COM' => 'int',
		'ID_CAT' => 'int',
		'VALORACION_BLG' => 'int'
	];

	protected $fillable = [
		'ID_CLT',
		'ID_COM',
		'ID_CAT',
		'TITULO_BLG',
		'VALORACION_BLG'
	];

	public function comentario()
	{
		return $this->belongsTo(Comentario::class, 'ID_COM');
	}

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'ID_CLT');
	}

	public function categoria()
	{
		return $this->belongsTo(Categoria::class, 'ID_CAT');
	}
}
