<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SuplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $suplier = [
             ['nama'=>'Nevia', 'alamat'=>'Saluyu', 'kode_pos'=>40028, 'kota'=>'Bandung'],
             ['nama'=>'Sani', 'alamat'=>'Sukamenak', 'kode_pos'=>40027, 'kota'=>'Sumedang'],
             ['nama'=>'Memey', 'alamat'=>'Sayati', 'kode_pos'=>40029, 'kota'=>'Tasikmalaya'],
             ['nama'=>'Revani', 'alamat'=>'Pasawahan', 'kode_pos'=>40026, 'kota'=>'Surabaya'],
             ['nama'=>'Dian', 'alamat'=>'Katapang', 'kode_pos'=>40025, 'kota'=>'Jambi']
        ];
         DB::table('suplier')->insert($suplier);
    }
}
