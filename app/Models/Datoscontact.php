<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Datoscontact
 * 
 * @property int $id
 * @property string $nombre
 * @property string $email
 * @property string $direccion
 * @property string $telefono
 * @property string $mensaje
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Datoscontact extends Model
{
	protected $table = 'datoscontact';

	protected $fillable = [
		'nombre',
		'email',
		'direccion',
		'telefono',
		'mensaje'
	];
}
