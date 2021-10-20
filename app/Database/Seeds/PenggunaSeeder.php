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
                'nama'      => 'ilham',
                'password'  => md5('12200096')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200096',
                'password'  => md5('ilham')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}