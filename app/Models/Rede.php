<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rede extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'redes';

    protected $fillable = ['ID_RDS','FACEBOOK','INSTAGRAM','LINKEDIN','TIKTOK'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informaciones()
    {
        return $this->hasMany('App\Models\Informacione', 'ID_RDS', 'ID_RDS');
    }
    
}
