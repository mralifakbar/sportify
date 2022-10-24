<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRentTime extends Migration
{
    public function up()
    {
         $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_lapangan' => [
                'type'       => 'INT',
                'constraint' => '5',
            ],
            'tanggal' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'durasi' => [
                'type' => 'int',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('rent_time');
    }

    public function down()
    {
        $this->forge->dropTable('rent_time');
    }
}