<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $table = 'clientes';
    protected $returnType = 'object';
    protected $primaryKey = 'cicli_id';
    protected $allowedFields = ['cicli_id','nombre_cliente','apellido_cliente','direccion_cliente','celular_cliente','correo_cliente'];

    public function getCliente($cicli_id = null)
    {
        if ($cicli_id === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['cicli_id' => $cicli_id])->first();
    }
}