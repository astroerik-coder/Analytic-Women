<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'provincias';

    protected $fillable = ['ID_PRO','NOMBRE_PRO'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ciudades()
    {
        return $this->hasMany('App\Models\Ciudade', 'ID_PRO', 'ID_PRO');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'ID_PRO', 'ID_PRO');
    }
    
}
