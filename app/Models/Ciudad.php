<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ciudad
 * 
 * @property int $ID_CIU
 * @property int|null $ID_PRO
 * @property string|null $NOMBRE_CIU
 * 
 * @property Provincium|null $provincium
 *
 * @package App\Models
 */
class Ciudad extends Model
{
	protected $table = 'ciudad';
	protected $primaryKey = 'ID_CIU';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_CIU' => 'int',
		'ID_PRO' => 'int'
	];

	protected $fillable = [
		'ID_PRO',
		'NOMBRE_CIU'
	];

	public function provincium()
	{
		return $this->belongsTo(Provincium::class, 'ID_PRO');
	}
}
