<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PembelianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            [ 'nama_barang'=>'Silverqueen', 'nama_suplier'=>'Cindy', 'qty'=>4, 'tgl_pesan'=>'2021-10-06'],
            [ 'nama_barang'=>'Cadbury', 'nama_suplier'=>'Fuji', 'qty'=>6, 'tgl_pesan'=>'2021-10-07'],
            [ 'nama_barang'=>'Toblerone', 'nama_suplier'=>'Anggi', 'qty'=>8, 'tgl_pesan'=>'2021-10-08'],
            [ 'nama_barang'=>'Harsheys kisses', 'nama_suplier'=>'Alya', 'qty'=>7, 'tgl_pesan'=>'2021-10-09'],
            [ 'nama_barang'=>'Lindt', 'nama_suplier'=>'Lia', 'qty'=>2, 'tgl_pesan'=>'2021-10-10']

        ];
        DB::table('pembelian')->insert($pembelian);
    }
}
