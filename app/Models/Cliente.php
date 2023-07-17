<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	use HasFactory;
	
    public $timestamps = false;

    protected $table = 'clientes';

    protected $fillable = ['ID_CLT','ID_EMPR','ID_GEN','ID_PRO','ID_EMP','NOMBRE_CLT','FECHA_NACIMIENTO_CLT','TELEFONO1_CLT','TELEFONO2_CLT','EMAIL_CLT','TITULO_CLT','ROL_CLT','EXPERIENCIA_CLT','FOTO_CLT'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany('App\Models\Blog', 'ID_CLT', 'ID_CLT');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cursoscapacitaciones()
    {
        return $this->hasMany('App\Models\Curso', 'ID_CLT', 'ID_CLT');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleo()
    {
        return $this->hasOne('App\Models\Empleo', 'ID_EMP', 'ID_EMP');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'ID_EMPR', 'ID_EMPR');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function genero()
    {
        return $this->hasOne('App\Models\Genero', 'ID_GEN', 'ID_GEN');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provincia()
    {
        return $this->hasOne('App\Models\Provincia', 'ID_PRO', 'ID_PRO');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function servicios()
    {
        return $this->hasMany('App\Models\Servicio', 'ID_CLT', 'ID_CLT');
    }
    
}
