<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ciusu_id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'nombre_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'apellido_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'direccion_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'correo_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'telefono_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'contrasena_usuario' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'tipo_usuario' => [
                'type'       => 'ENUM',
                'constraint' => ['admin','recepcionista','despachador'],
                'default' => 'recepcionista'
            ],
        ]);
        $this->forge->addKey('ciusu_id', true);
        $this->forge->createTable('usuarios');

    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
