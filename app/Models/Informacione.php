<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informacione extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'informaciones';

    protected $fillable = ['ID_INF','ID_RDS','ID_CONT','MISION','VISION','CULTURA_ORGANIZACIONAL'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contacto()
    {
        return $this->hasOne('App\Models\Contacto', 'ID_CONT', 'ID_CONT');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function redesSociale()
    {
        return $this->hasOne('App\Models\Rede', 'ID_RDS', 'ID_RDS');
    }
    
}
