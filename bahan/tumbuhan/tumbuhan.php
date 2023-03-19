<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:25:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Tumbuhan</title>
    <link rel="stylesheet" href="../navigasi.css">
    <link rel="stylesheet" href="../../border.css">
    <script src="../../../code.jquery.com/jquery-3.4.1.js"></script>
    <script src="../../../kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<!-- <body onload="drop();"> -->

<!--header untuk judul sub bab-->
<div class="header">
    <center>
        <h2>A. Tumbuhan (Plantae)</h3>
    </center>
</div>
<!-- navigasi sidebar (sebagai navigasi di sebelah kiri)-->
<div class="btn">
    <span class="fas fa-bars"></span>
</div>
<nav class="sidebar">
    <div><img src="../gambar/LOGO.png"></div>
    <ul>
        <li class="beranda"><a href="../../index.php">Beranda</a></li>
        <li><a href="tumbuhan" style=" color: cyan; background: #389761;" class="">Tumbuhan</a></li>
        <li>
            <a href="#" class="dropdown-btn">Tumbuhan Lumut (Bryophyta)
                <span class="fas fa-caret-down"></span>
            </a>
            <ul class="lumut-tampil">
                <li><a href="ciri_lumut.php">Ciri-ciri Tumbuhan Lumut</a></li>
                <li><a href="reproduksi_lumut.php">Reproduksi Lumut</a></li>
                <li><a href="klasifikasi_lumut.php">Klasifikasi Lumut</a></li>
                <li><a href="peranan_lumut.php">Peranan Lumut Bagi Manusia</a></li>
                <li><a href="rangkuman1.php"" >Rangkuman</a></li>
                <li><a href=" kuis1.php">Kuis</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn">Tumbuhan Paku (Pteridophyta)
                <span class="fas fa-caret-down"></span>
            </a>
            <ul class="pte-tampil">
                <li><a href="ciri_pteridophyta.php">Ciri-ciri Tubuh Pteridophyta</a></li>
                <li><a href="reproduksi_pteridophyta.php">Reproduksi Pteridophyta </a></li>
                <li><a href="klasifikasi_pteridophyta.php">Klasifikasi Pteridophyta</a></li>
                <li><a href="peranan_pteridophyta.php">Peranan Pteridophyta Bagi Manusia</a></li>
                <li><a href="rangkuman2.php"" >Rangkuman</a></li>
                <li><a href=" kuis2.php">Kuis</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn">Tumbuhan Berbiji (Spermatophyta)
                <span class="fas fa-caret-down"></span>
            </a>
            <ul class="spe-tampil">
                <li><a href="ciri_spermatophyta.php">Ciri-ciri Spermatophyta</a></li>
                <li><a href="klasifikasi_spermatophyta.php">Klasifikasi Spermatophyta</a></li>
                <li><a href="rangkuman2.php">Rangkuman</a></li>
                <li><a href="kuis3.php">Kuis</a></li>
            </ul>
        </li>
        <li><a href="evaluasi.php" class="">Evaluasi</a></li>

    </ul>
</nav>
<!-- javascript untuk navigasi-->
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
</script>
<!--class untuk konten-->
<div class="content">
    <br>


    <h3 style="width: 250px;"> <img src="../gambar/tujuan.png" width="20px" height="40px">
        <p class="textjudul">Tujuan Pembelajaran</p>
    </h3>

    <div class="canvas">
        Peserta didik dapat mengidentifikasi ciri – ciri umum plantae.
    </div>
    <br>
    <h3> <img src="../gambar/microscope.png">
        <p class="textjudul">Ayo Mengamati</p>
    </h3>
    <div class="canvas">
        <p>Jika kita berada di lingkungan yang terdapat banyak tumbuhan hijau, udara terasa segar.
            Hal ini disebabkan tumbuhan hijau menghasilkan oksigen pada saat berfotosintesis. Oksigen
            diperlukan untuk bernapas seluruh makhluk hidup di bumi. Selain oksigen, tumbuhan juga
            menghasilkan zat makanan (karbohidrat, protein, lemak, vitamin, dan garam mineral) yang sangat
            diperlukan untuk kelangsungan hidup manusia maupun hewan.
        </p>
        <br>
        <p>Tumbuhan merupakan komponen biotik penting dalam suatu ekosistem. Bagaimanakah
            ciri-ciri tumbuhan tersebut? Organisme manakah yang termasuk tumbuhan? Pelajari materi ini
            dengan penuh semangat.
        </p>
    </div>
    <br>
    <h3> <img src="../gambar/menonton.png">
        <p class="textjudul">Mari Menonton</p>
    </h3>
    <div class="canvas">
        Untuk mengetahui pengertian tumbuhan. Simaklah vidio berikut dengan seksama<br><br>
        <center>
            <video id="vidio" controls>
                <source src="video/video1.mp4">
            </video>
            <br>
            <i>Video 1. Tumbuhan</i>
        </center>
        <br>
        <!--untuk kontrol vidio-->
        <!-- <div class="canvas"	style="background:white;">
          <center>
          <b> Navigasi Video :</b>
          
            <button class="btnvidio" onclick="burung()" type="button">Burung</button>
            <button class="btnvidio" onclick="salmon()" type="button">Ikan Salmon</button>
            <button class="btnvidio" onclick="penyu()" type="button">Penyu</button>
            <button class="btnvidio" onclick="lobster()" type="button">Lobster Duri</button>
            <button class="btnvidio" onclick="bakteri()" type="button">Bakteri</button>
        
          </center>
        </div> -->
    </div>


    <br>
    <!--kesimpulan muncul setelah selesai menonton vidio-->
    <h3> <img src="../gambar/penjelasan.png">
        <p class="textjudul">Kesimpulan</p>
    </h3>
    <div class="canvas">
        <div class="sebelum" style="color: brown;">
            <center>
                <b>KESIMPULAN AKAN MUNCUL SETELAH SELESAI MENONTON VIDEO</b>
            </center>
        </div>
        <div class="kesimpulan">
            <p>Plantae adalah tumbuhan dengan ciri-ciri berikut : </p><br>
            <ul>
                <li>Tersusun atas sel eukariotik atau sel yang mempunyai membrane.</li>
                <li>Mempunyai organ berupa akar, batang dan daun.</li>
                <li>Merupakan organisme multiseluler.</li>
                <li>Mempunyai dinding sel yang tersusun atas selulosa.</li>
                <li>Mempunyaiklorofil sehingga berfotosintesis.</li>
                <li>Menyimpan cadangan makanan dalam bentuk tepung atau amilum.</li>
                <li>Bersifat autotroph atau bisa membuat makanannya sendiri.</li>
            </ul>
            <br>

            <p> Karna banyaknya jenis tumbuhan maka untuk mempelajarinya tumbuhan dikelompokkan
                dalam beberapa klasifikasi berikut :</p><br>

            <p>1. Klasifikasi berdasarkan divisi, tumbuhan menjadi 3 devisi :</p>
            <ul>
                <li>Briophyta (tumbuhan lumut)</li>
                <li>Pteridophyta (tumbuhan paku)</li>
                <li>Spermatophyta (tumbuhan berbiji), terdiri dari Gymnospermae (berbiji tertubka dan
                    Angiospermae (berbiji tertutup).</li>
            </ul>

            <p>2. Klasifikasi berdasarkan jaringan tubuh terdiri dari 2 kelompok :</p>
            <ul>
                <li>allophyta atau tumbuhan bertalus, artinya tumbuhan yang belum memiliki akar,
                    batang dan daun sejati. Contohnya lumut.</li>
                <li>Cormophyta atau tumbuhan berkormus, yaitu tumbuhan yang sudah memiliki akar,
                    batang, dan daun sejati. Contohnya pakis dan manga</li>
            </ul>
            <p>Klasifikasi tumbuhan berdasarkan jaringan pembuluh, yaitu :</p>
            <ul>
                <li>Atracheophyta, yaitu tumbuhan yang belum memiliki pembuluh. Contoh lumut</li>
                <li>Tracheophyte, yaitu tumbuhan yang sudah memiliki pembuluh xylem dan floem.
                    Contoh pakis dan kelapa.</li>
            </ul>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>
<!--untuk mengakses file javascript-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="script.js"></script>
<script src="../navigasi.js"></script>

<!--framework untuk MathJax/latex (untuk menulis rumus)-->
<script type="text/javascript" async
    src="../../../cdn.mathjax.org/mathjax/latest/MathJaxb198.js?config=TeX-MML-AM_CHTML">

</script>
<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
        tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
        });
    </script>
<!--footer halaman yang berisi navigasi page halaman-->
<div class="footer">
    <div class="navigasibawah">
        <center>
            <button>Sebelumnya</button>
            <a href="tumbuhan.php"><button class="btn1">1</button></a>
            <a href="ciri_lumut.php"><button>Selanjutnya</button></a>
        </center>
    </div>
</div>
</body>

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:26:04 GMT -->

</html>