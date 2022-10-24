<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
                'null' => false,
            ],
            'tanggal' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'jam' => [
                'type' => 'INT',
                'null' => false,
                'constraint' => '5',
            ],
            'durasi' => [
                'type' => 'INT',
                'null' => false,
            ],
            'total_pembayaran' => [
                'type' => 'INT',
                'null' => false,
                'constraint' => '10',
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi');
    }
}