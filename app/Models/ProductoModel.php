<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'codprod_id';
    protected $allowedFields = ['codprod_id','nombre_producto','descripcion_producto','categoria_producto','precio_producto','cantidad_producto'];

    public function getCliente($codprod_id = null)
    {
        if ($codprod_id === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['codprod_id' => $codprod_id])->first();
    }
}