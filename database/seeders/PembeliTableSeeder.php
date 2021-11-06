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
             ['nama'=>'Silvi', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Rancamayar', 'kode_pos'=>40111, 'kota'=>'Bandung', 'tgl_lahir'=>'2003-01-05' ],
             ['nama'=>'Sifa', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Jagakarsa', 'kode_pos'=>10110, 'kota'=>'Jakarta', 'tgl_lahir'=>'2004-03-05'],
             ['nama'=>'Suci', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Malioboro', 'kode_pos'=>55000, 'kota'=>'Yogyakarta', 'tgl_lahir'=>'2004-06-07'],
             ['nama'=>'Selvi', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Banyumanik', 'kode_pos'=>50111, 'kota'=>'Semarang', 'tgl_lahir'=>'2004-10-26'],
             ['nama'=>'Putri', 'jns_kelamin'=>'Perempuan', 'alamat'=>'Bantarjati', 'kode_pos'=>16111, 'kota'=>'Bogor', 'tgl_lahir'=>'2005-01-01']

         ];
         DB::table('pembeli')->insert($pembeli);
    }
}
