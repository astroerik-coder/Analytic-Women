<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'servicios';

    protected $fillable = ['ID_SER','ID_CLT','NOMBRE_SER','DESCRIPCION_SER','OBSERVACIONES_SER'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'ID_CLT', 'ID_CLT');
    }
    
}
