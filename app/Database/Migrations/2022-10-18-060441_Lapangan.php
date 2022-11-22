<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lapangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_lapangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'jenis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'tipe_lapangan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'tipe_lantai' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'panjang' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'lebar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 255,
                'null' => false,
            ],
            'deskripsi' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'link_foto' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'id_pengelola' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('lapangan');
    }

    public function down()
    {
        $this->forge->dropTable('lapangan');
    }
}