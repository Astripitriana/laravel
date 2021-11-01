<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            ['nama'=>'Silverqueen', 'varian'=>'Choco Caramell', 'harga_beli'=>18000, 'harga_jual'=>12000],
            ['nama'=>'Cadbury', 'varian'=>'Choco Mint', 'harga_beli'=>19000, 'harga_jual'=>16000],
            ['nama'=>'Toblerone', 'varian'=>'Choco Banana', 'harga_beli'=>35000, 'harga_jual'=>32000],
            ['nama'=>'Harsheys kisses', 'varian'=>'Choco Tiramisu', 'harga_beli'=>90000, 'harga_jual'=>85000],
            ['nama'=>'Lindt', 'varian'=>'Choco Nut', 'harga_beli'=>115000, 'harga_jual'=>100000]

        ];
        DB::table('barang')->insert($barang);
    }
}
