<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Transaksi extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_lapangan' => 1,
                'id_user' => 1,
                'tanggal' => '2022-11-21',
                'jam' => '10',
                'durasi' => '1',
                'total_pembayaran' => '70000',
                'created_at' => Time::now(),
            ],
            [
                'id_lapangan' => 2,
                'id_user' => 2,
                'tanggal' => '2022-11-21',
                'jam' => '12',
                'durasi' => '2',
                'total_pembayaran' => '140000',
                'created_at' => Time::now(),
            ],
            [
                'id_lapangan' => 3,
                'id_user' => 3,
                'tanggal' => '2022-11-21',
                'jam' => '14',
                'durasi' => '3',
                'total_pembayaran' => '210000',
                'created_at' => Time::now(),
            ],
        ];

        foreach($data as $dt) {
            $this->db->table('transaksi')->insert($dt);
        }
    }
}