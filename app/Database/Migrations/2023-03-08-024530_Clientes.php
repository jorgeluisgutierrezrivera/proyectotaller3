<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
                'cicli_id'=>[
                    'type' => 'INT',
                    'constraint' => 20,
                    'unsigned' => TRUE,
                    'auto_increment' => FALSE,
                ],
                
                'apellido_cliente'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 200,
                ],
                'nombre_cliente'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 200,
                ],
                'direccion_cliente'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 200,
                ],
                'celular_cliente'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
                'correo_cliente'=>[
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                ],
            ]);
            $this->forge->addKey('cicli_id',TRUE);
            $this->forge->createTable('clientes');
    }

    public function down()
    {
        $this->forge->dropTable('clientes');

    }
}
