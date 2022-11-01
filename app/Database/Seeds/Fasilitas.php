<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Fasilitas extends Seeder
{
    public function run()
    {
        $fasilitas_data = [
			[
				'id_lapangan' => '2',
				'nama_fasilitas'  => 'Wifi',
				
			],
			[
				'id_lapangan' => '2',
				'nama_fasilitas'  => 'Mushola',
				
			],
            [
				'id_lapangan' => '2',
				'nama_fasilitas'  => 'Kantin',
				
			],
            [
				'id_lapangan' => '2',
				'nama_fasilitas'  => 'Locker',
				
			],
            
		];

		foreach($fasilitas_data as $data){
			// insert semua data ke tabel
			$this->db->table('fasilitas')->insert($data);
		}
    }
}
