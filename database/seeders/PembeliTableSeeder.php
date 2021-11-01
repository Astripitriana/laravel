<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembeliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = [
            ['nama'=>'Silvi', 'jns_kelamin'=>'Perempuan', 'alamat'=>Bandung, 'kode_pos'=>12000, 'kota'=>Bandung, 'tgl_lhr'=>12000 ],
            ['nama'=>'Sifa', 'jns_kelamin'=>'Perempuan', 'alamat'=>Bandung, 'kode_pos'=>12000, 'kota'=>Jakarta, 'tgl_lhr'=>12000 ],
            ['nama'=>'Suci', 'jns_kelamin'=>'Perempuan', 'alamat'=>Bandung, 'kode_pos'=>12000, 'kota'=>Yogyakarta, 'tgl_lhr'=>12000 ],
            ['nama'=>'Selvi', 'jns_kelamin'=>'Perempuan', 'alamat'=>Bandung, 'kode_pos'=>12000, 'kota'=>Semarang, 'tgl_lhr'=>12000 ],
            ['nama'=>'Putri', 'jns_kelamin'=>'Perempuan', 'alamat'=>Bandung, 'kode_pos'=>12000, 'kota'=>Bogor, 'tgl_lhr'=>12000 ]

        ];
        DB::table('pembeli')->insert($pembeli);
    }
}
