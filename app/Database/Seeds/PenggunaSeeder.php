<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'   => 'Ilham',
                'password' => md5('12200096')
            ],
            [
                'nama'   => 'admin',
                'password' => md5('123456')
            ],
            [
                'nama'   => 'siswa',
                'password' => md5('445566')
            ]
        ];
        $p = new Pengguna();
        $p->insertBatch($data);
    }
}