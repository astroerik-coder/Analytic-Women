<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	use HasFactory;

    protected $primaryKey = 'ID_BLG';

    public $timestamps = false;

    protected $table = 'blogs';

    protected $fillable = ['ID_BLG','ID_CLT','ID_COM','ID_CAT','TITULO_BLG','VALORACION_BLG'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'ID_CAT', 'ID_CAT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'ID_CLT', 'ID_CLT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comentario()
    {
        return $this->hasOne('App\Models\Comentario', 'ID_COM', 'ID_COM');
    }

}
