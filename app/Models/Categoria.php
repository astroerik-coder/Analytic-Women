<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categorias';

    protected $fillable = ['ID_CAT','NOMBRE_CAT'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany('App\Models\Blog', 'ID_CAT', 'ID_CAT');
    }
    
}
