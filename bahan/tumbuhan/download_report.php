<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:25:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<style>
/* CSS untuk mengatur tampilan menu */
.menu-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    /* background-color: #333; */
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' version='1.1' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns:svgjs='http://svgjs.com/svgjs' width='1440' height='560' preserveAspectRatio='none' viewBox='0 0 1440 560'%3e%3cg mask='url(%26quot%3b%23SvgjsMask1006%26quot%3b)' fill='none'%3e%3crect width='1440' height='560' x='0' y='0' fill='url(%23SvgjsLinearGradient1007)'%3e%3c/rect%3e%3cpath d='M1440 0L853.99 0L1440 87.34z' fill='rgba(255%2c 255%2c 255%2c .1)'%3e%3c/path%3e%3cpath d='M853.99 0L1440 87.34L1440 286.53L668.87 0z' fill='rgba(255%2c 255%2c 255%2c .075)'%3e%3c/path%3e%3cpath d='M668.87 0L1440 286.53L1440 351.09999999999997L423.07 0z' fill='rgba(255%2c 255%2c 255%2c .05)'%3e%3c/path%3e%3cpath d='M423.06999999999994 0L1440 351.09999999999997L1440 447L247.66999999999993 0z' fill='rgba(255%2c 255%2c 255%2c .025)'%3e%3c/path%3e%3cpath d='M0 560L584.96 560L0 524.88z' fill='rgba(0%2c 0%2c 0%2c .1)'%3e%3c/path%3e%3cpath d='M0 524.88L584.96 560L603.2800000000001 560L0 441.85z' fill='rgba(0%2c 0%2c 0%2c .075)'%3e%3c/path%3e%3cpath d='M0 441.85L603.2800000000001 560L799.7 560L0 196.81000000000003z' fill='rgba(0%2c 0%2c 0%2c .05)'%3e%3c/path%3e%3cpath d='M0 196.81L799.7 560L1113.91 560L0 153.88z' fill='rgba(0%2c 0%2c 0%2c .025)'%3e%3c/path%3e%3c/g%3e%3cdefs%3e%3cmask id='SvgjsMask1006'%3e%3crect width='1440' height='560' fill='white'%3e%3c/rect%3e%3c/mask%3e%3clinearGradient x1='15.28%25' y1='-39.29%25' x2='84.72%25' y2='139.29%25' gradientUnits='userSpaceOnUse' id='SvgjsLinearGradient1007'%3e%3cstop stop-color='%230e2a47' offset='0'%3e%3c/stop%3e%3cstop stop-color='rgba(32%2c 158%2c 0%2c 1)' offset='1'%3e%3c/stop%3e%3c/linearGradient%3e%3c/defs%3e%3c/svg%3e");

}

.menu-item {
    position: relative;
    margin: 0 10px;
    padding: 10px;
    font-size: 18px;
    color: #fff;
    cursor: pointer;
}

.menu-item:hover {
    background-color: #5ff573;
}

.active {
    background-color: #48bb78;
}

/* .form-data {
    max-width: 400px;
    margin: 10px auto;
    display: flex;
    flex-direction: column;
} */

label {
    font-weight: bold;
    margin-bottom: 8px;
}

input,
select {
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
    margin-bottom: 16px;
    font-size: 16px;
}

button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 16px;
}

button[type="submit"]:hover {
    background-color: #3e8e41;
}

.boxForm {
    /* width: 800px; */
    /* height: 200px; */
    /* background-color: #ccc; */
    border: 3px solid #000;
    /* position: absolute; */
    /* top: 40%;
    left: 40%;
    transform: translate(-50%, -50%); */
    margin-top: 10px;
    /* display: flex;
    justify-content: left; */
}

.boxForm1 {
    /* width: 800px; */
    /* height: 200px; */
    /* background-color: #ccc; */
    /* border: 3px solid #000; */
    /* position: absolute; */
    /* top: 40%;
    left: 40%;
    transform: translate(-50%, -50%); */
    margin-top: 10px;
    display: flex;
    justify-content: center;
}

div .margin_left {
    margin-left: 30px;
    /* memberikan margin sebesar 10px pada sisi kanan label */
}

select {
    width: 200px;
}

table {
    font-family: Arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td,
th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
    text-align: center;
}


.benar {
    background-color: #20ff00;
}

.salah {
    background-color: #ff0000;
}
</style>

<?php
// $kelas = '';
// $kuis = '';
// if (isset($_GET['cari'])) 
// {
	$kelas = $_GET['kelas'];
	$kuis = $_GET['kuis'];
// }
// var_dump($kuis);exit;

?>

<head>
    <meta charset="utf-8">
    <title>Tumbuhan Lumut (Bryophyta)</title>
    <link href="DataTables/datatables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../navigasi.css">
    <link rel="stylesheet" href="../../border.css">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>
<!-- <body onload="drop();"> -->

<!--header untuk judul sub bab-->
<!-- <div class="header"> -->
<center>
    <h2>Data Nilai Siswa <?php echo $kelas; ?></h2>
</center>
<!-- </div> -->
<!--class untuk konten-->
<table>
    <thead>
        <tr>
            <th rowspan="2">Nama</th>
            <th rowspan="2">Skor</th>

            <?php 
		if ($kuis == "evaluasi") {?>
            <th colspan="20">Jawaban</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
        </tr>
        <?php
		} else { ?>
        <th colspan="10">Jawaban</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
        </tr>
        <?php } ?>
        <tr>
            <?php if ($kuis == 1){ ?>
            <th colspan="2">Kunci Jawaban</th>
            <th>b</th>
            <th>d</th>
            <th>b</th>
            <th>c</th>
            <th>a</th>
            <th>d</th>
            <th>a</th>
            <th>d</th>
            <th>a</th>
            <th>d</th>
            <?php } elseif ($kuis == 2) { ?>
            <th colspan="2">Kunci Jawaban</th>
            <th>b</th>
            <th>c</th>
            <th>d</th>
            <th>c</th>
            <th>b</th>
            <th>b</th>
            <th>c</th>
            <th>d</th>
            <th>a</th>
            <th>c</th>
            <?php } elseif ($kuis == 3) { ?>
            <th colspan="2">Kunci Jawaban</th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>d</th>
            <th>b</th>
            <th>c</th>
            <th>c</th>
            <th>d</th>
            <th>a</th>
            <th>c</th>
            <?php } else { ?>
            <th colspan="2">Kunci Jawaban</th>
            <th>c</th>
            <th>a</th>
            <th>d</th>
            <th>a</th>
            <th>b</th>
            <th>d</th>
            <th>d</th>
            <th>b</th>
            <th>c</th>
            <th>b</th>
            <th>d</th>
            <th>d</th>
            <th>e</th>
            <th>a</th>
            <th>b</th>
            <th>d</th>
            <th>d</th>
            <th>c</th>
            <th>d</th>
            <th>d</th>
            <?php  } ?>
        </tr>
    </thead>
    <!-- <tbody> -->
    <?php
                            // include 'koneksi.php';
                            // $data = mysqli_query($koneksi,"select * from tb_kuis1");
                            // while($row = mysqli_fetch_array($data))
                            // {
                            //     echo "<tr>
                            //     <td>".$row['kelas']."</td>
                            //     <td>".$row['nama']."</td>
                            //     <td>".$row['skor']."</td>
                            //     <td>".$row['tanggal']."</td>
                            //     <td>".$row['waktu']."</td>
                            //     <td><button>Hapus</button></td>
                            // </tr>";
                            // }
                        ?>
    <!-- </tbody> -->
    <tbody id="show_data">

    </tbody>
</table>


<script type="text/javascript">
$(document).ready(function() {

    tampil_data();

    function tampil_data() {

        const urlParams = new URLSearchParams(window.location.search);
        const kuis = urlParams.get('kuis');
        const sekolah = urlParams.get('sekolah');
        const kelas = urlParams.get('kelas');


        var url = 'data.php?kuis=' + kuis + '&sekolah=' + sekolah + '&kelas=' + kelas;

        console.log(kuis);

        if (kuis == 'evaluasi') {

            $.ajax({
                type: 'ajax',
                url: url,
                async: false,
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].nama + '</td>' +
                            '<td>' + data[i].skor + '</td>' +
                            '<td class="' + (data[i].soal1 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal1 + '</td>' +
                            '<td class="' + (data[i].soal2 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal2 + '</td>' +
                            '<td class="' + (data[i].soal3 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal3 + '</td>' +
                            '<td class="' + (data[i].soal4 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal4 + '</td>' +
                            '<td class="' + (data[i].soal5 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal5 + '</td>' +
                            '<td class="' + (data[i].soal6 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal6 + '</td>' +
                            '<td class="' + (data[i].soal7 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal7 + '</td>' +
                            '<td class="' + (data[i].soal8 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal8 + '</td>' +
                            '<td class="' + (data[i].soal9 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal9 + '</td>' +
                            '<td class="' + (data[i].soal10 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal10 + '</td>' +
                            '<td class="' + (data[i].soal11 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal11 + '</td>' +
                            '<td class="' + (data[i].soal12 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal12 + '</td>' +
                            '<td class="' + (data[i].soal13 == "e" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal13 + '</td>' +
                            '<td class="' + (data[i].soal14 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal14 + '</td>' +
                            '<td class="' + (data[i].soal15 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal15 + '</td>' +
                            '<td class="' + (data[i].soal16 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal16 + '</td>' +
                            '<td class="' + (data[i].soal17 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal17 + '</td>' +
                            '<td class="' + (data[i].soal18 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal18 + '</td>' +
                            '<td class="' + (data[i].soal19 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal19 + '</td>' +
                            '<td class="' + (data[i].soal20 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal20 + '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });

        } else if (kuis == 1) {

            $.ajax({
                type: 'ajax',
                url: url,
                async: false,
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].nama + '</td>' +
                            '<td>' + data[i].skor + '</td>' +
                            '<td class="' + (data[i].soal1 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal1 + '</td>' +
                            '<td class="' + (data[i].soal2 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal2 + '</td>' +
                            '<td class="' + (data[i].soal3 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal3 + '</td>' +
                            '<td class="' + (data[i].soal4 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal4 + '</td>' +
                            '<td class="' + (data[i].soal5 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal5 + '</td>' +
                            '<td class="' + (data[i].soal6 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal6 + '</td>' +
                            '<td class="' + (data[i].soal7 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal7 + '</td>' +
                            '<td class="' + (data[i].soal8 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal8 + '</td>' +
                            '<td class="' + (data[i].soal9 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal9 + '</td>' +
                            '<td class="' + (data[i].soal10 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal10 + '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        } else if (kuis == 2) {

            $.ajax({
                type: 'ajax',
                url: url,
                async: false,
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].nama + '</td>' +
                            '<td>' + data[i].skor + '</td>' +
                            '<td class="' + (data[i].soal1 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal1 + '</td>' +
                            '<td class="' + (data[i].soal2 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal2 + '</td>' +
                            '<td class="' + (data[i].soal3 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal3 + '</td>' +
                            '<td class="' + (data[i].soal4 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal4 + '</td>' +
                            '<td class="' + (data[i].soal5 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal5 + '</td>' +
                            '<td class="' + (data[i].soal6 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal6 + '</td>' +
                            '<td class="' + (data[i].soal7 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal7 + '</td>' +
                            '<td class="' + (data[i].soal8 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal8 + '</td>' +
                            '<td class="' + (data[i].soal9 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal9 + '</td>' +
                            '<td class="' + (data[i].soal10 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal10 + '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        } else if (kuis == 3) {

            $.ajax({
                type: 'ajax',
                url: url,
                async: false,
                dataType: 'json',
                success: function(data) {
                    // console.log(data);
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].nama + '</td>' +
                            '<td>' + data[i].skor + '</td>' +
                            '<td class="' + (data[i].soal1 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal1 + '</td>' +
                            '<td class="' + (data[i].soal2 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal2 + '</td>' +
                            '<td class="' + (data[i].soal3 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal3 + '</td>' +
                            '<td class="' + (data[i].soal4 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal4 + '</td>' +
                            '<td class="' + (data[i].soal5 == "b" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal5 + '</td>' +
                            '<td class="' + (data[i].soal6 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal6 + '</td>' +
                            '<td class="' + (data[i].soal7 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal7 + '</td>' +
                            '<td class="' + (data[i].soal8 == "d" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal8 + '</td>' +
                            '<td class="' + (data[i].soal9 == "a" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal9 + '</td>' +
                            '<td class="' + (data[i].soal10 == "c" ? 'benar' : 'salah') + '">' +
                            data[i]
                            .soal10 + '</td>' +
                            '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }
    }
});

window.print();
</script>
<!--untuk mengakses file javascript-->
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<!-- <script src="script.js"></script>
<script src="../navigasi.js"></script> -->