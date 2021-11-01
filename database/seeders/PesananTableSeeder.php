<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PesananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesanan = [
            ['nama_pelanggan'=>'Astri', 'nama_barang'=>'Silverqueen', 'qty'=>3, 'tgl_pesan'=>'2021-10-01'],
            ['nama_pelanggan'=>'Anisa', 'nama_barang'=>'Cadbury', 'qty'=>4, 'tgl_pesan'=>'2021-10-02'],
            ['nama_pelanggan'=>'Indah', 'nama_barang'=>'Toblerone', 'qty'=>5, 'tgl_pesan'=>'2021-10-03'],
            ['nama_pelanggan'=>'Indri', 'nama_barang'=>'Harsheys kisses', 'qty'=>6, 'tgl_pesan'=>'2021-10-04'],
            ['nama_pelanggan'=>'Dinda', 'nama_barang'=>'Lindt', 'qty'=>7, 'tgl_pesan'=>'2021-10-05']

        ];
        DB::table('pesanan')->insert($pesanan);
    }
}
