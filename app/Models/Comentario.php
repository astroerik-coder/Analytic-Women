<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
	use HasFactory;

    protected $primaryKey = 'ID_COM';

    public $timestamps = true;

    protected $table = 'comentarios';

    protected $fillable = ['ID_COM','CONTENIDO_COM','FECHA_PUBLICACION_COM','REVISION_COM'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function blogs()
    {
        return $this->hasMany('App\Models\Blog', 'ID_COM', 'ID_COM');
    }

}
