<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Productos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'codprod_id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'nombre_producto' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'descripcion_producto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'categoria_producto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'precio_producto' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'cantidad_producto' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
        ]);
        $this->forge->addKey('codprod_id', true);
        $this->forge->createTable('productos');
    }

    public function down()
    {
        $this->forge->dropTable('productos');
    }
}
