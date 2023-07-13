<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'pagos';

    protected $fillable = ['ID_EMP','ID_CUR','ID_PAG','NOMBRE_PAG','METODO_PAG','FECHA_PAG','MONTO_PAG'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cursoscapacitacione()
    {
        return $this->hasOne('App\Models\Curso', 'ID_CUR', 'ID_CUR');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleo()
    {
        return $this->hasOne('App\Models\Empleo', 'ID_EMP', 'ID_EMP');
    }
    
}
