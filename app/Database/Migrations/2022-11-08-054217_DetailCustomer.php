<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailCustomer extends Migration
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
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => false,
            ],
            'alamat' => [
                'type'       => 'TEXT',
                'null' => false,
            ],
            'keterangan' => [
                'type'       => 'TEXT',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('detail_customer');
    }

    public function down()
    {
        $this->forge->dropTable('detail_customer');
    }
}
