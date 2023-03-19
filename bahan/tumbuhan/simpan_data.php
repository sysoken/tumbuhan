<?php
// Koneksi ke MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_tumbuhan';
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi ke MySQL gagal: " . mysqli_connect_error();
    exit();
}

function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}

// Ambil data dari form
$data = $_POST['data'];

$jenisKuis =  $data['kuis'];

if ($jenisKuis == "kuis1") {

    $nama = $data['nama'];
    $kelas = $data['kelas'];


    $nilaiJawab = 0;

    if ($data['soal1'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal2'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal3'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal4'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal5'] == 'a') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal6'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal7'] == 'a') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal8'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal9'] == 'a') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal10'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    $s1 = $data['soal1'];
    $s2 = $data['soal2'];
    $s3 = $data['soal3'];
    $s4 = $data['soal4'];
    $s5 = $data['soal5'];
    $s6 = $data['soal6'];
    $s7 = $data['soal7'];
    $s8 = $data['soal8'];
    $s9 = $data['soal9'];
    $s10 = $data['soal10'];

    $waktu = $data['waktu'];

    $date = tanggal_indo(date('Y-m-d'), true);
    

    $sqlJawaban = "INSERT INTO tb_kuis1 (nama, kelas, skor,waktu,tanggal, soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,soal9,soal10) VALUES ('$nama', '$kelas', $nilaiJawab,'$waktu','$date', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', '$s10')";
    // Masukkan data ke tabel

    // var_dump($sqlJawaban);exit;

    if (mysqli_query($koneksi, $sqlJawaban)) {
        $sql = "INSERT INTO tb_nilai (nama, kelas,kuis1) VALUES ('$nama', '$kelas', $nilaiJawab )";
        mysqli_query($koneksi, $sql);
        // if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil disimpan.";
        // } else {
        //     echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        // }
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
    
    
}

if ($jenisKuis == "kuis2") {

    $nama = $data['nama'];
    $kelas = $data['kelas'];


    $nilaiJawab = 0;

    if ($data['soal1'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    if ($data['soal2'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    if ($data['soal3'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal4'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal5'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal6'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal7'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal8'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal9'] == 'a') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal10'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    $s1 = $data['soal1'];
    $s2 = $data['soal2'];
    $s3 = $data['soal3'];
    $s4 = $data['soal4'];
    $s5 = $data['soal5'];
    $s6 = $data['soal6'];
    $s7 = $data['soal7'];
    $s8 = $data['soal8'];
    $s9 = $data['soal9'];
    $s10 = $data['soal10'];


    $waktu = $data['waktu'];

    $date = tanggal_indo(date('Y-m-d'), true);
    

    $sqlJawaban = "INSERT INTO tb_kuis2 (nama, kelas, skor,waktu,tanggal, soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,soal9,soal10) VALUES ('$nama', '$kelas', $nilaiJawab,'$waktu','$date', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', '$s10')";
    // Masukkan data ke tabel

    // var_dump($sqlJawaban);exit;

    if (mysqli_query($koneksi, $sqlJawaban)) {
        $sql = "UPDATE tb_nilai SET kuis2 = $nilaiJawab WHERE nama = '$nama' AND kelas = '$kelas'";
        mysqli_query($koneksi, $sql);
        // if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil disimpan.";
        // } else {
        //     echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        // }
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

if ($jenisKuis == "kuis3") {

    $nama = $data['nama'];
    $kelas = $data['kelas'];


    $nilaiJawab = 0;

    if ($data['soal1'] == 'a') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    if ($data['soal2'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    if ($data['soal3'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal4'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal5'] == 'b') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal6'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal7'] == 'c') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal8'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal9'] == 'a') {
        $nilaiJawab = $nilaiJawab + 10;
    }
    if ($data['soal10'] == 'd') {
        $nilaiJawab = $nilaiJawab + 10;
    }

    $s1 = $data['soal1'];
    $s2 = $data['soal2'];
    $s3 = $data['soal3'];
    $s4 = $data['soal4'];
    $s5 = $data['soal5'];
    $s6 = $data['soal6'];
    $s7 = $data['soal7'];
    $s8 = $data['soal8'];
    $s9 = $data['soal9'];
    $s10 = $data['soal10'];



    $waktu = $data['waktu'];

    $date = tanggal_indo(date('Y-m-d'), true);
    

    $sqlJawaban = "INSERT INTO tb_kuis3 (nama, kelas, skor,waktu,tanggal, soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,soal9,soal10) VALUES ('$nama', '$kelas', $nilaiJawab,'$waktu','$date', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', '$s10')";
    // Masukkan data ke tabel

    // var_dump($sqlJawaban);exit;

    if (mysqli_query($koneksi, $sqlJawaban)) {
        $sql = "UPDATE tb_nilai SET kuis3 = $nilaiJawab WHERE nama = '$nama' AND kelas = '$kelas'";
        mysqli_query($koneksi, $sql);
        // if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil disimpan.";
        // } else {
        //     echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        // }
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

if ($jenisKuis == "evaluasi") {

    $nama = $data['nama'];
    $kelas = $data['kelas'];


    $nilaiJawab = 0;

    if ($data['soal1'] == 'c') {
        $nilaiJawab = $nilaiJawab + 5;
    }

    if ($data['soal2'] == 'a') {
        $nilaiJawab = $nilaiJawab + 5;
    }

    if ($data['soal3'] == 'a') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal4'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal5'] == 'b') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal6'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal7'] == 'c') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal8'] == 'b') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal9'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal5'] == 'b') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal11'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal12'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal13'] == 'b') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal14'] == 'a') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal15'] == 'a') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal16'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal17'] == 'a') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal18'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal19'] == 'c') {
        $nilaiJawab = $nilaiJawab + 5;
    }
    if ($data['soal20'] == 'd') {
        $nilaiJawab = $nilaiJawab + 5;
    }


    $s1 = $data['soal1'];
    $s2 = $data['soal2'];
    $s3 = $data['soal3'];
    $s4 = $data['soal4'];
    $s5 = $data['soal5'];
    $s6 = $data['soal6'];
    $s7 = $data['soal7'];
    $s8 = $data['soal8'];
    $s9 = $data['soal9'];
    $s10 = $data['soal10'];
    $s11 = $data['soal11'];
    $s12 = $data['soal12'];
    $s13 = $data['soal13'];
    $s14 = $data['soal14'];
    $s15 = $data['soal15'];
    $s16 = $data['soal16'];
    $s17 = $data['soal17'];
    $s18 = $data['soal18'];
    $s19 = $data['soal19'];
    $s20 = $data['soal10'];



    $waktu = $data['waktu'];

    $date = tanggal_indo(date('Y-m-d'), true);
    

    $sqlJawaban = "INSERT INTO tb_evaluasi (nama, kelas, skor,waktu,tanggal, soal1,soal2,soal3,soal4,soal5,soal6,soal7,soal8,soal9,soal10,soal11,soal12,soal13,soal14,soal15,soal16,soal17,soal18,soal19,soal20) VALUES ('$nama', '$kelas', $nilaiJawab,'$waktu','$date', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9', '$s10', '$s11', '$s12', '$s13', '$s14', '$s15', '$s16', '$s17', '$s18', '$s19', '$s20')";
    // Masukkan data ke tabel

    // var_dump($sqlJawaban);exit;

    if (mysqli_query($koneksi, $sqlJawaban)) {
        $sql = "UPDATE tb_nilai SET evaluasi = $nilaiJawab WHERE nama = '$nama' AND kelas = '$kelas'";
        mysqli_query($koneksi, $sql);
        // if (mysqli_query($koneksi, $sql)) {
            echo "Data berhasil disimpan.";
        // } else {
        //     echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        // }
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}

// Tutup koneksi
mysqli_close($koneksi);
