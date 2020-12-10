<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosModel extends Model
{
    protected $table = 'tb_productos';
    protected $primaryKey = 'id_producto';
    protected $fillable = [
       'nombre_producto',
       'no_existencias',
       'precio',
       'descripcion',
       'medida',
       'precio_oferta'
    ];

    public function scopeBuscar($query,$buscar){
        if (trim($buscar != "")) {
            $query->where(\DB::raw("nombre_producto"), "LIKE", "%".$buscar."%");
        }
        }


}
