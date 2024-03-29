<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Waktu extends Migration
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
            'id_transaksi' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => false,
            ],
            'jam' => [
                'type'       => 'VARCHAR',
                'constraint' => '12',
                'null' => false,
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null' => false,
            ],
            'id_lapangan' => [
                'type'       => 'INT',
                'constraint' => '5',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('waktu');
    }

    public function down()
    {
        $this->forge->dropTable('waktu');
    }
}