<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categoria
 * 
 * @property int $ID_CAT
 * @property string|null $NOMBRE_CAT
 * 
 * @property Collection|Blog[] $blogs
 *
 * @package App\Models
 */
class Categoria extends Model
{
	protected $table = 'categorias';
	protected $primaryKey = 'ID_CAT';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CAT' => 'int'
	];

	protected $fillable = [
		'NOMBRE_CAT'
	];

	public function blogs()
	{
		return $this->hasMany(Blog::class, 'ID_CAT');
	}
}
