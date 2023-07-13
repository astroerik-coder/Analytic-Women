<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'cursos';

    protected $fillable = ['ID_CUR','ID_CLT','NOMBRE_CUR','DESCRIPCION_CUR','PUBLICO_CUR','EDAD_MINIMA_CUR','EDAD_MAXIMA_CUR','LINK_CUR','CUPOS_CUR','COSTO_CUR'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'ID_CLT', 'ID_CLT');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos()
    {
        return $this->hasMany('App\Models\Pago', 'ID_CUR', 'ID_CUR');
    }
    
}
