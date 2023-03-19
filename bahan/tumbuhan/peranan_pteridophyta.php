<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:25:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <title>Tumbuhan Paku (Pteridophyta)</title>
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
        <h2>C. Tumbuhan Paku (Pteridophyta)</h2>
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
        <li><a href="tumbuhan.php" class="">Tumbuhan</a></li>
        <li>
            <a href="#" class="dropdown-btn " style=" color: cyan; background: #389761;">Tumbuhan Lumut (Pteridophyta)
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
            <a href="#" class="dropdown-btn active">Tumbuhan Paku (Pteridophyta)
                <span class="fas fa-caret-down"></span>
            </a>
            <ul class="pte-tampil" style="display: block;">
                <li><a href="ciri_pteridophyta.php">Ciri-ciri Tubuh Pteridophyta</a></li>
                <li><a href="reproduksi_pteridophyta.php">Reproduksi Pteridophyta </a></li>
                <li><a href="klasifikasi_pteridophyta.php">Klasifikasi Pteridophyta</a></li>
                <li><a href="peranan_pteridophyta.php" style="color: cyan; background: #389761;">Peranan Pteridophyta
                        Bagi Manusia</a></li>
                <li><a href="rangkuman2.php">Rangkuman</a></li>
                <li><a href="kuis2.php">Kuis</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-btn">Tumbuhan Berbiji (Spermatophyta)
                <span class="fas fa-caret-down"></span>
            </a>
            <ul class="spe-tampil">
                <li><a href="ciri_spermatophyta.php">Ciri-ciri Spermatophyta</a></li>
                <li><a href="klasifikasi_spermatophyta.php">Klasifikasi Spermatophyta</a></li>
                <li><a href="rangkuman3.php">Rangkuman</a></li>
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


    <!-- <h3 style="width: 250px;"> <img src="../gambar/tujuan.png" width="20px" height="40px"><p class="textjudul">Tujuan Pembelajaran</p></h3>
      <div class="canvas">
        <ul>
          <li>Peserta didik dapat mendiskripsikan ciri-ciri umum tumbuhan Paku (Pteridophyta)</li>
          <li>Peserta didik dapat memahami siklus hidup tumbuhan Paku</li>
          <li>Peserta didik dapat menyusun klasifikasi tumbuhan Paku-pakuan</li>
          <li>Peserta didik dapat menjelaskan peran tumbuhan bagi kehidupan</li>
        </ul>
      </div>
      <br> -->
    <h3> <img src="../gambar/microscope.png">
        <p class="textjudul">Ayo Mengamati</p>
    </h3>
    <div class="canvas">
        <p>Manfaat tumbuhan paku antara lain :</p>
        <ol type="a">
            <li>Untuk tanaman hias, misalnya Platycerium bifurcatum (paku tanduk rusa), Asplenium nidus
                (paku sarang burung), Adiantum cuneatum (suplir), Selaginella wildenowii (paku rane).</li>
            <li>Untuk bahan obat-obatan, misalnya Aspidium felixmas, dan Lycopodium clavatum (paku
                kawat).</li>
            <li>Untuk sayuran (dapat dimakan), misalnya Marsilea crenata (paku semanggi).</li>
            <li>Sebagai pupuk hijau, misalnya Azolla pinnata dan Anabaena azollae.</li>
            <li>Sebagai pelindung tanaman pertanian, misalnya Gleichenia linearis</li>
            <li>Sebagai tiang bangunan, contohnya: Alsophila glauca.</li>
        </ol>
    </div>
    <!-- <h3> <img src="../gambar/menonton.png"><p class="textjudul">Mari Menonton</p></h3>
      <div class="canvas">
        Untuk mengetahui pengertian tumbuhan paku. Simaklah vidio berikut dengan seksama<br><br>
        <center>
          <video id="vidio" controls>
            <source src="video/video7.mp4">
          </video>
          <br> -->
    <!-- <i>Video 1. Tumbuhan</i> -->
    <!-- </center>
        <br> -->
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
    <!-- </div> -->


    <!-- <br>
    kesimpulan muncul setelah selesai menonton vidio
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
               
            <ul>
                <li>Anggota tumbuhan berpembuluh tidak berbiji adalah tumbuhan paku. Tumbuhan paku sudah
                    termasuk ke dalam tumbuhan kormus (Cormophyta) karena sudah memiliki akar, batang, dan
                    daun yang jelas. Akar pada paku bersifat seperti serabut yangujungnyadilindungiolehkaliptra
                    (tudung akar). Batang pada sebagian besar paku tidak terlihat karena berada di dalam tanah
                    dalam bentuk rimpang. Akan tetapi, ada pula yang memiliki batang di permukaan tanah yang
                    bercabang, seperti pada Cyathea.</li>
                <li>Daun pada tumbuhan paku tampak jelas. Daunnya selalu melingkar dan bergulung pada usia
                    muda. Tumbuhan berpembuluh tidak berbiji memiliki dua macam bentuk daun, yaitu daun
                    yang tidak mengandung spora (tropofil), dan daun yang mengandung spora (sporofil) Di
                    bagian bawah sporofil terdapat banyak bulatan kecil berwarna kecokelatan. Bulatan tersebut
                    berkumpul membentuk struktur yang disebut sorus (jamak: sori). Setiap sorus terdiri atas
                    banyak kotak spora yang disebut sporangium.Selain terdapat pada sorus, sporangium juga terkumpul
                    pada strobilus dan sporokarpium. Strobilus ini merupakan sporangium yang
                    membentuk struktur seperti kerucut.</li>
                <li>Terdapat beberapa bentuk spora pada paku yakni, paku homospora, paku heterospora, dan
                    paku peralihan. Paku homospora menghasilkan spora dengan jenis dan ukuran yang sama,
                    contohnya paku kawat (Lycopodium sp.). Paku heterospora menghasilkan spora dengan jenis
                    dan ukuran berbeda, contohnya Selaginella sp. Paku peralihan menghasilkan spora dengan
                    bentuk dan ukuran sama, namun berjenis kelamin jantan atau betina, contohnya paku ekor
                    kuda (Equisetum sp.).</li>
                <li>Perkembangbiakan tumbuhan paku dilakukan secara seksual dan aseksual. Secara seksual
                    melalui pembentukan gamet jantan dan betina oleh alat-alat kelamin (gametangium).
                    Gametangium jantan (anteridium) menghasilkan spermatozoid dan gametangium betina
                    (arkegonium) menghasilkan sel telur (ovum). Tumbuhan paku juga mengalami pergiliran
                    keturunan (metagenesis). Metagenesis pada paku heterospora berbeda dengan paku
                    homospora</li>
            </ul>
        </div>
    </div>
    <br> -->
    <!-- <h3> <img src="../gambar/latihan.png">
    <p class="textjudul">Contoh Soal</p>
  </h3>
  <div class="canvas">
    <div class="sebelum" style="color: brown;">
      <center>
              <b>SOAL AKAN MUNCUL SETELAH SELESAI MENONTON VIDEO</b>
            </center>
    </div>
    <div class="kesimpulan">
      <p>Pilihlah satu jawaban yang paling benar</p> <br>
      <p>Berikut ini merupakan ciri-ciri tumbuhan: 1. memiliki sorus 2. gametofit lebih dominan 3.
        memiliki protonema 4. belum memiliki pembuluh angkut 5. tingkat sporofit lebih dominan
        dalam hidupnya 6. memiliki protalium Ciri-ciri tumbuhan paku adalah …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">1, 2, dan 3</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">1, 5, dan 6</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">2, 3, dan 4</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">3, 4, dan 5</label>
      </div>
      <br>
      <p>Selaginella adalah paku heterospora karena …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">menghasilkan spora yang sama</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">menghasilkan spora yang berbeda</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">menghasilkan spora yang berbeda jenis</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">menghasilkan gamet yang sama</label>
      </div>

      <br>
      <p>Bagian tumbuhan Pteridophyta yang menunjukkan tingkat perkembangan lebih maju dari
        tumbuhan Bryophyta adalah …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">Gigi peristom</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">Kapsul spora</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">Jaringan steril</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">Jaringan angkut</label>
      </div>

      <br>
      <p>Daun tumbuhan paku yang berfungsi untuk fotosintesis adalah …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">Mikrofil</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">Makrofil</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">Tropofil</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">Sporofil</label>
      </div>

      <br>
      <p>Ditemukan fase-fase dari perkembangbiakan tumbuhan paku adalah seperti di bawah ini: 1)
        tumbuhan paku dengan sporangium 2) protalium 3) spora 4) zigot 5) embrio 6) tumbuhan paku
        muda Dari fase-fase perkembangbiakan paku tersebut dapat disusun secara urut adalah …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">3 – 1 – 2 – 5 – 4 – 6</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">3 – 4 – 5 – 2 – 6 – 1</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">3 – 2 – 4 – 5 – 6 – 1</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">3 – 2 – 5 – 4 – 6 – 1</label>
      </div>

      <br>
      <p>Perhatikan gambar daur hidup tumbuhan paku berikut.
        Pernyataan yang benar adalah …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">2 adalah protonema, fase gametofit</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">2 adalah protalium, fase gametofit</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">4 adalah protonema, fase sporofit</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">4 adalah protalium, fase sporofit</label>
      </div>

      <br>
      <p>Daun pada tumbuhan paku yang sudah menjadi epidermis, daging daun, dan tulang daun
        tersebut …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">Mesofil</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">Mikrofil</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">Makrofil</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">Tropofil</label>
      </div>

      <br>
      <p>Struktur pembentukkan gamet pada tumbuhan Pterydophyta terdapat pada bagian …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">Mikroprotalium</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">Anteridium</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">Makroprotalium</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">Sporangium</label>
      </div>

      <br>
      <p>Manfaat tumbuhan paku untuk tanaman hias antara lain …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">Adiantum (paku suplir)</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">Equisetumum (paku ekor kuda)</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">Alsophyla (paku tiang)</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">Azolla (paku sampan)</label>
      </div>

      <br>
      <p>Anggota dari tumbuhan paku di bawah ini yang termasuk paku homospora adalah …..</p>
      <div>
        <input type="radio" id="a" name="drone" value="a">
        <label for="a">Filicinae (paku benar)</label>
      </div>

      <div>
        <input type="radio" id="b" name="drone" value="b">
        <label for="b">Platyserium (paku tanduk rusa)</label>
      </div>

      <div>
        <input type="radio" id="c" name="drone" value="c">
        <label for="c">Lycopodium (paku kawat)</label>
      </div>

      <div>
        <input type="radio" id="d" name="drone" value="d">
        <label for="d">Marsilea (paku semanggi)</label>
      </div>

    </div>
  </div> -->
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
            <a href="klasifikasi_pteridophyta.php"><button>Sebelumnya</button></a>
            <button class="btn1">1</button>
            <a href="rangkuman2.php"><button>Selanjutnya</button></a>
        </center>
    </div>
</div>
</body>

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:26:04 GMT -->

</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(document).ready(function() {
    const username = localStorage.getItem('username');


    if (username == null) {
        Swal.fire({
            title: 'Kamu Belum Menyelesaikan Kuis Sebelumnya!!!',
            icon: 'warning',
            // showCancelButton: true,
            confirmButtonText: 'Oke',
        }).then((result) => {
            //menyimpan data session
            // localStorage.setItem('username', nama);
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                // Swal.fire('Data berhasil disimpan!', '', 'success');
                // setTimeout(function() {
                document.location.href = `kuis1.php`;
                // }, delayInMilliseconds);

            }
        })
    }

    // localStorage.clear();


    // Membuat variabel global untuk menyimpan waktu terakhir aktivitas
    var lastActivity = Date.now();

    // Menetapkan waktu batas untuk memeriksa aktivitas pengguna (dalam milidetik)
    var inactivityTime = 300000; // 5 menit

    // Memperbarui variabel lastActivity setiap kali pengguna melakukan aktivitas
    document.addEventListener("mousemove", function() {
        lastActivity = Date.now();
    });

    // Mengecek aktivitas pengguna setiap 30 detik
    setInterval(function() {
        if (Date.now() - lastActivity > inactivityTime) {
            // Menghapus session pada localStorage jika pengguna tidak aktif
            localStorage.clear();
        }
    }, 30000); // 30 detik

});
</script>