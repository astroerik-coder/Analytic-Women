<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
	use HasFactory;
	
    protected $primaryKey = 'ID_GEN';

    public $timestamps = true;

    protected $table = 'generos';

    protected $fillable = ['ID_GEN','NOMBRE_GEN'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'ID_GEN', 'ID_GEN');
    }
    
}
