<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudade extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'ciudades';

    protected $fillable = ['ID_CIU','ID_PRO','NOMBRE_CIU'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provincia()
    {
        return $this->hasOne('App\Models\Provincia', 'ID_PRO', 'ID_PRO');
    }
    
}
