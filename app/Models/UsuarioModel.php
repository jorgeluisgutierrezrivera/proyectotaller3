<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'ciusu_id';
    protected $returnType = 'object';
    protected $allowedFields = ['ciusu_id','nombre_usuario','apellido_usuario','direccion_usuario','correo_usuario','telefono_usuario','contrasena_usuario'];

    public function contrasenaHash($contrasenaHash){
        return password_hash($contrasenaHash, PASSWORD_DEFAULT);
    }

    public function contrasenaVerificar($contrasenaPlano,$contrasenaHash) {
        return password_verify($contrasenaPlano,$contrasenaHash);
    }

    public function getUsuario($ciusu_id = null)
    {
        if ($ciusu_id === null) {
            return $this->findAll();
        }

        return $this->asArray()->where(['ciusu_id' => $ciusu_id])->first();
    }
}
