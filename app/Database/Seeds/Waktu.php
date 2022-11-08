<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Waktu extends Seeder
{
    public function run()
    {
        $data = [
            
            [
                'id_transaksi' => 2,
                'jam' => '08:00:00',
                'tanggal' => '2022-12-1',
            ],
            [
                'id_transaksi' => 3,
                'jam' => '09:00:00',
                'tanggal' => '2022-11-19',
            ],
            [
                'id_transaksi' => 4,
                'jam' => '10:00:00',
                'tanggal' => '2022-11-12',
            ],
            [
                'id_transaksi' => 5,
                'jam' => '11:00:00',
                'tanggal' => '2022-11-20',
            ],
        ];

        foreach($data as $dt) {
            $this->db->table('waktu')->insert($dt);
        }
    }
}
