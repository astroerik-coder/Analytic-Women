<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	use HasFactory;
	
    protected $primaryKey = 'ID_CONT';


    public $timestamps = true;

    protected $table = 'contactos';

    protected $fillable = ['ID_CONT','NOMBRE_CONT','TELEFONO1_CONT','TELEFONO2_CONT','EMAIL1_CONT','EMAIL2_CONT'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informaciones()
    {
        return $this->hasMany('App\Models\Informacione', 'ID_CONT', 'ID_CONT');
    }
    
}
