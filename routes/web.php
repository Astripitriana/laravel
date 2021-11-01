<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 Route::get('/', function () {
     return view('welcome');
 });

// Route::get('hal2', function(){
//     return "<h1>Selamat datang di halaman ke dua</h1>";
//  });

// Route::get('biodata', function(){
//      $nama = "Astri Pitriana";
//      $jk = "Perempuan";
//      $tmpt_lhr = "Bandung";
//      $tgl_lhr = "10 November 2004";
//      $alamat = "Kp Pasawahan";
//      $agama = "Islam";
//      $Hobi = "Membaca";

//      return "Nama : ". $nama .
//      "<br>Jenis Kelamin : ". $jk .
//      "<br> Tempat Lahir : " . $tmpt_lhr .
//      "<br> Tanggal Lahir :" . $tgl_lhr .
//      "<br> Alamat : ". $alamat .
//      "<br> Agama : ". $agama .
//      "<br> Hobi : ". $Hobi;

// });

// Route::get('biodata2', function(){
//      $nama = "Astri Pitriana";
//     $jk = "Perempuan";
//     $tmpt_lhr = "Bandung";
//     $tgl_lhr = "10 November 2004";
//     $alamat = "Kp Pasawahan";
//     $agama = "Islam";
//     $Hobi = "Membaca";
//     return view('biodata', compact('nama', 'jk', 'tmpt_lhr', 'tgl_lhr', 'alamat', 'agama', 'Hobi'));
//  });

//  //route parameter
//   Route::get('/input/{nama}/{jk}/{tmpt_lhr}/{tgl_lhr}/{alamat}/{agama}/{hobi}', function($nama, $jk, $tmpt_lhr, $tgl_lhr, $alamat, $agama, $hobi){
//       echo "Nama Saya : ".$nama."<br>";
//       echo "<br>Jenis Kelamin :". $jk ."</br>";
//       echo "<br>Tempat Lahir :". $tmpt_lhr ."</br>";
//       echo "<br>Tanggal Lahir :". $tgl_lhr ."</br>";
//       echo "<br>Alamat :". $alamat ."</br>";
//       echo "<br>Agama :". $agama ."</br>";
//       echo "<br>Hobi :". $hobi ."</br>";

//  });

//  Route::get('blog', function(){
//      $data = [
//          ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'Content Pertama'],
//          ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'Content Kedua'],
//          ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'Content Ketiga'],
//      ];
//      //dd ($dtaa);
//      return view('blog', compact('data'));
//  });


//   Route::get('absensi', function(){
//        $data = [
//            ['Nis' => 1, 'Nama' => 'Alya Nurlia',     'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 2, 'Nama' => 'Anggi Fitria',    'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 3, 'Nama' => 'Anisa Andriani',  'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 4, 'Nama' => 'Arif Muhammad I', 'Jenis Kelamin' => 'Laki-laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 5, 'Nama' => 'Astri Pitriana M','Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 6, 'Nama' => 'Azhar Rizky A',   'Jenis Kelamin' => 'Laki-laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 7, 'Nama' => 'Aziz Tubagus TH', 'Jenis Kelamin' => 'Laki-laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 8, 'Nama' => 'Bima Putra R',    'Jenis Kelamin' => 'Laki-laki', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 9, 'Nama' => 'Cindy Nurul A',   'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//            ['Nis' => 10, 'Nama' => 'Dinda Dwi O',    'Jenis Kelamin' => 'Perempuan', 'Kelas' => 'XII RPL 3', 'Alamat' => 'Bandung'],
//        ];
//        return view('absensi', compact('data'));
//    });

//  Route::get('siswa', function(){
//       $siswas = [
//           ['Id'              => 1,
//           'Nama'             => 'Astri Pitriana',
//           'Jenis kelamin'    => 'Perempuan',
//           'Kelas'            => 'XII RPL 3',
//           'Mapel'            => [
//                   'mapel'  => 'Bahasa Indonesia',
//                   'mapel2' => 'Bahasa Inggris',
//                   'mapel3' => 'Bahasa Jepang',
//                   'mapel4' => 'Bahasa Belanda',
//               ]
//           ],
//       ];
//       return view('siswa', compact('siswas'));
//  });

//parameter optional
//  Route::get('/input/{nama?/}', function($nama="Astri"){
//      echo "Nama Saya : ".$nama."<br>";


// });

// Route::get('/input/{nama?}/{nilai1?}/{nilai2?}/{nilai3?}/{nilai4?}', function($nama=null, $nilai1=95, $nilai2=85, $nilai3=90, $nilai4=100){
//      echo "Nama : " . $nama . "<br>";
//      echo "Nilai Bahasa Indonesia : " . $nilai1 . "<br>";
//      echo "Nilai Bahasa Inggris :" . $nilai2 ."<br>";
//      echo "Nilai Matematika :" . $nilai3 . "<br>";
//      echo "Nilai Produktif : " . $nilai4 . "<br>";
//      $rata = ($nilai1 + $nilai2 + $nilai3 + $nilai4)/4;
//      echo "Rata- rata :" .$rata. "<br>";
//      echo "Grade :";
//       if($rata >= 90){
//         echo "A";
//       }elseif ($rata >= 80){
//         echo "B";
//       }elseif ($rata >= 70){
//         echo "C";
//       }else{
//         echo "D";
//       }
// });

// Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function($makanan=null, $minuman=null, $cemilan=null){
//     if($makanan && $minuman && $cemilan != null){
//       return "Anda Memesan<br>
//               Makanan = $makanan <br>
//               Minuman = $minuman <br>
//               Cemilan = $cemilan <br>";
//     }elseif ($makanan && $minuman != null){
//       return "Anda Memesan<br> Makanan = $makanan <br>
//               Minuman = $minuman <br>";
//     }elseif ($makanan || $minuman != null){
//       return $makanan != null? "Anda Memesan <br> Makanan: $makanan" : "Anda Memesan <br> Minuman : $minuman";
//     }else{
//       return "Anda Tidak Memesan Silahkan Pulang";
//     }
//   });

// menampilkan data
//  Route::get('/testmodel', function(){
//      $query = App\Models\Post::all();
//      return $query;
//  });

//  Route::get('test', function(){
//      $query = App\Models\Post::all();
//      return view('test', compact('query'));
//  });

Route::get('barang', function(){
    $barang = App\Models\barang::all();
    return view('barang', compact('barang'));
});
