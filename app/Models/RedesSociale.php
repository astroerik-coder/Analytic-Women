<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RedesSociale
 * 
 * @property int $ID_RDS
 * @property string|null $FACEBOOK
 * @property string|null $INSTAGRAM
 * @property string|null $LINKEDIN
 * @property string|null $TIKTOK
 * 
 * @property Collection|Informacion[] $informacions
 *
 * @package App\Models
 */
class RedesSociale extends Model
{
	protected $table = 'redes_sociales';
	protected $primaryKey = 'ID_RDS';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_RDS' => 'int'
	];

	protected $fillable = [
		'FACEBOOK',
		'INSTAGRAM',
		'LINKEDIN',
		'TIKTOK'
	];

	public function informacions()
	{
		return $this->hasMany(Informacion::class, 'ID_RDS');
	}
}
