<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'empresas';

    protected $fillable = ['ID_EMPR','NOMBRE_EMPR','LOGO_EMPR'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'ID_EMPR', 'ID_EMPR');
    }
    
}
