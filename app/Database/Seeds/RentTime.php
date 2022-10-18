<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RentTime extends Seeder
{
    public function run()
    {
        $rentTimeData = [
            [
                'id_lapangan' => '1',
                'tanggal' => '2022-10-20 09:00:00',
                'durasi' => '1'
            ],
            [
                'id_lapangan' => '2',
                'tanggal' => '2022-10-21 10:00:00',
                'durasi' => '2'
            ],
            [
                'id_lapangan' => '3',
                'tanggal' => '2022-10-21 11:00:00',
                'durasi' => '3'
            ],
        ];

        foreach($rentTimeData as $data) {
            $this->db->table('rent_time')->insert($data);
        }
    }
}