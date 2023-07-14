<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
<<<<<<< Updated upstream
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
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Datoscontact extends Model
{
    //use HasFactory;
    protected $table="contactanos";
    protected $primaryKey="id";
    protected $fillable=['nombre','apellidos','email','mensaje','created_at','updated_at'];
    public $timestamps=false;
}
>>>>>>> Stashed changes
