<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'empleos';

    protected $fillable = ['ID_EMP','NOMBRE_EMP','DESCRIPCION_EMP','MODALIDAD_EMP','HORARIO_EMP','FECHA_PUBLICACION_EMP','EXPERIENCIA_EMP'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'ID_EMP', 'ID_EMP');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'ID_EMP', 'ID_EMP');
    }
    
}
