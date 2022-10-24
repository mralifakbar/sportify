<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Lapangan extends Seeder
{
    public function run()
    {
        $lapangan_data = [
			[
				'nama_lapangan' => 'Srikandi',
				'jenis'  => 'Futsal',
				'lokasi' => 'Metro Kibang',
                'tipe_lapangan' => 'Outdoor',
                'tipe_lantai' => 'Rumput Hijau',
                'panjang' => '100 M',
                'lebar' => '50 M',
                'harga' => '50000',
                'id_pengelola' => '0101'
			],
			[
                'nama_lapangan' => 'Gelora Bung Karno',
				'jenis'  => 'Basket',
				'lokasi' => 'Bandar Lampung',
                'tipe_lapangan' => 'Indoor',
                'tipe_lantai' => 'Semen Halus',
                'panjang' => '500 M',
                'lebar' => '300 M',
                'harga' => '300000',
                'id_pengelola' => '0201'
			],
			[
                'nama_lapangan' => 'Dino',
				'jenis'  => 'Futsal',
				'lokasi' => 'Bandar Jaya Raya',
                'tipe_lapangan' => 'Outdoor',
                'tipe_lantai' => 'Semen Kasar',
                'panjang' => '75 M',
                'lebar' => '30 M',
                'harga' => '70000',
                'id_pengelola' => '0102'
			]
		];

		foreach($lapangan_data as $data){
			// insert semua data ke tabel
			$this->db->table('lapangan')->insert($data);
		}
    }
}
