<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:25:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<style>
.form-data {
    max-width: 400px;
    margin: 10px auto;
    display: flex;
    flex-direction: column;
}

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
    width: 600px;
    height: 200px;
    /* background-color: #ccc; */
    border: 3px solid #000;
    position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-50%, -50%);
}

.box1 {
    width: 800px;
    height: 600px;
    /* background-color: #ccc; */
    border: 3px solid #000;
    position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-50%, -50%);
    padding: 20px;
    display: none;
}

.box2 {
    width: 200px;
    height: 200px;
    /* background-color: #ccc; */
    border: 3px solid #000;
    position: absolute;
    top: 15.7%;
    left: 74%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-items: top;
    flex-direction: row;
    visibility: hidden;
}

.selesai {
    width: 100px;
    height: 50px;
    /* background-color: #ccc; */
    border: 3px solid #000;
    position: absolute;
    top: 40%;
    left: 74%;
    transform: translate(-50%, -50%);
    background-color: #3e8e41;
    visibility: hidden;
}

.smallbox {
    width: 25px;
    height: 25px;
    border: 2px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px;
    cursor: pointer;
}
</style>

<head>
    <meta charset="utf-8">
    <title>Tumbuhan Lumut (Bryophyta)</title>
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
        <h2>B. Tumbuhan Lumut (Bryophyta)</h2>
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
            <a href="#" class="dropdown-btn active" style=" color: cyan; background: #389761;">Tumbuhan Lumut
                (Bryophyta)
                <span class="fas fa-caret-down"></span>
            </a>
            <ul class="lumut-tampil" style="display: block;">
                <li><a href="ciri_lumut.php">Ciri-ciri Tumbuhan Lumut</a></li>
                <li><a href="reproduksi_lumut.php">Reproduksi Lumut</a></li>
                <li><a href="klasifikasi_lumut.php">Klasifikasi Lumut</a></li>
                <li><a href="peranan_lumut.php">Peranan Lumut Bagi Manusia</a></li>
                <li><a href="rangkuman1.php"">Rangkuman</a></li>
              <li><a href=" kuis1.php" style="color: cyan; background: #389761;">Kuis</a></li>
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
    <div class="boxForm" id="box-form">
        <form class="form-data" id="form-data">
            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama">
            </div>
            <div>
                <label for="kelas">Kelas:</label>
                <select id="kelas" name="kelas">
                    <option value="XA">SMAN 1 Jenamas Kelas XA</option>
                    <option value="XB">SMAN 1 Jenamas Kelas XB</option>
                </select>
            </div>
            <button type="submit">Kirim</button>
        </form>
    </div>

    <div class="box1" id="box1">
        <div>
            <?php
// Waktu saat ini
$waktu_sekarang = time();

// Waktu 15 menit yang akan datang
$waktu_15_menit = $waktu_sekarang + (15 * 60);
?>

            <!-- Tampilkan timer dalam format menit:detik dan diperbarui setiap detik -->
            <p style="text-align: left;"></p>
            <p style="text-align: right;" id="timer"></p>
        </div><br>
        <div class="soal" id="soal1">
            <h4>1. Tumbuhan lumut memiliki ciri-ciri sebagai berikut, kecuali ….</h4><br>
            <form id="form-pertanyaan-1">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal1" value="a">
                    <label for="a">A .Habitat di tempat lembab</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal1" value="b">
                    <label for="b">B. Memiliki jaringan pembuluh</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal1" value="c">
                    <label for="c">C. Tidak mempunyai jaringan pembuluh</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal1" value="d">
                    <label for="d">D. Belum mempunyai akar, batang, dan daun sejati</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal1" value="e">
                    <label for="e">E. Merupakan tumbuhan peralihan antara tumbuhan bertalus dan tumbuhan
                        berkormus</label>
                </div>
            </form>
        </div>
        <div class="soal" id="soal2" style="display:none">
            <h4>2. Sporofit pada tumbuhan lumut adalah generasi yang menghasilkan ….</h4><br>
            <form id=" form-pertanyaan-2">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal2" value="a">
                    <label for="a">A. Protonema</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal2" value="b">
                    <label for="b">B. Anteridium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal2" value="c">
                    <label for="c">C. Arkegonium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal2" value="d">
                    <label for="d">D. Spora</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal2" value="e">
                    <label for="e">E. Gamet</label>
                </div>
            </form>
        </div>
        <div class="soal" id="soal3" style="display:none">
            <h4>3. Anteridium pada tumbuhan lumut adalah generasi yang menghasilkan ....</h4><br>
            <form id="form-pertanyaan-3">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal3" value="a">
                    <label for="a">A. Protonema</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal3" value="b">
                    <label for="b">B. Spermatozoid</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal3" value="c">
                    <label for="c">C. Arkegonium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal3" value="d">
                    <label for="d">D. Gamet</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal3" value="e">
                    <label for="e">E. Spora</label>
                </div>
            </form>
        </div>
        <div class="soal" id="soal4" style="display:none">
            <h4>4. Urutan yang benar bagian – bagian tumbuhan lumut daun dari ujung ke pangkal adalah …</h4><br>
            <form id="form-pertanyaan-4">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal4" value="a">
                    <label for="a">A. Operculum – kapsul – annulus – peristom</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal4" value="b">
                    <label for="b">B. Peristom – operculum – kapsul – annulus</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal4" value="c">
                    <label for="c">C. Operculum – peristom – annulus – kapsul</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal4" value="d">
                    <label for="d">D. Peristom – kapsul – operculum – annulus</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal4" value="e">
                    <label for="e">E. Annulus – operculum – peristome - kapsul</label>
                </div>
            </form>
        </div>

        <div class="soal" id="soal5" style="display:none">
            <h4>5. Tumbuhan lumut ada yang berumah satu, artinya</h4><br>
            <form id="form-pertanyaan-5">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal5" value="a">
                    <label for="a">A. Anteridium dan arkegonium terdapat pada satu talus yang sama</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal5" value="b">
                    <label for="b">B. Anteridium dan arkegonium terdapat pada talus yang berbeda</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal5" value="c">
                    <label for="c">C. Pada talus lumut hanya terdapat satu anteridium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal5" value="d">
                    <label for="d">D. Pada talus lumut hanya terdapat satu arkegonium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal5" value="e">
                    <label for="e">E. Pada talus lumut dibentuk satu antridium dan satu anteridium</label>
                </div>
            </form>
        </div>

        <div class="soal" id="soal6" style="display:none">
            <h4>6. Berikut merupakan urutan ringkas dari daur hidup lumut adalah ….</h4><br>
            <form id="form-pertanyaan-6">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal6" value="a">
                    <label for="a">A. Talus – zigot – sel gamet – tumbuhan lumut</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal6" value="b">
                    <label for="b">B. Talus – gemma – gamet – tumbuhan lumut</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal6" value="c">
                    <label for="c">C. Tumbuhan lumut – zigot – gemma – talus</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal6" value="d">
                    <label for="d">D. Tumbuhan lumut – gamet – zigot – talus</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal6" value="e">
                    <label for="e">E. Talus – sel gamet – zigot – tumbuhan lumut</label>
                </div>
            </form>
        </div>
        <div class="soal" id="soal7" style="display:none">
            <h4>7. Urutan siklus hidup tumbuhan Bryophyta pada fase ganetofitnya adalah ….</h4><br>
            <form id="form-pertanyaan-7">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal7" value="a">
                    <label for="a">A. Protonema – tumbuhan lumut – anteridium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal7" value="b">
                    <label for="b">B. Protonema – protalium – tumbuhan lumut</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal7" value="c">
                    <label for="c">C. Protalium – protonema – anteridium</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal7" value="d">
                    <label for="d">D. Protalium – spora – arkegonia</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal7" value="e">
                    <label for="e">E. Protalium – arkegonium - spermatozoa</label>
                </div>
            </form>
        </div>

        <div class="soal" id="soal8" style="display:none">
            <h4>8. Pada tumbuhan lumut yang berfungsi untuk menyerap air dan garam mineral adalah…</h4><br>
            <form id="form-pertanyaan-8">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal8" value="a">
                    <label for="a">A. Akar</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal8" value="b">
                    <label for="b">B. Seta</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal8" value="c">
                    <label for="c">C. Kapsul</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal8" value="d">
                    <label for="d">D. Rhizoid</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal8" value="e">
                    <label for="e">E. Vaginula</label>
                </div>
            </form>
        </div>
        <div class="soal" id="soal9" style="display:none">
            <h4>9. Apa nama takson dari pada lumut hati?</h4><br>
            <form id="form-pertanyaan-9">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal9" value="a">
                    <label for="a">A. Hepaticopsida</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal9" value="b">
                    <label for="b">B. Anthocerotopsida</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal9" value="c">
                    <label for="c">C. Marchantia polymorpha</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal9" value="d">
                    <label for="d">D. Bryopsida</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal9" value="e">
                    <label for="e">E. Semua Salah</label>
                </div>
            </form>
        </div>

        <div class="soal" id="soal10" style="display:none">
            <h4>10. Apa nama takson dari lumut daun?</h4><br>
            <form id="form-pertanyaan-10">
                <div style="padding-left: 15px">
                    <input type="radio" id="a" name="soal10" value="a">
                    <label for="a">A. Sphagnum SP</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="b" name="soal10" value="b">
                    <label for="b">B. Anthocerotopsida</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="c" name="soal10" value="c">
                    <label for="c">C. Marchantia polymorpha</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="d" name="soal10" value="d">
                    <label for="d">D. Bryopsida</label>
                </div>
                <div style="padding-left: 15px">
                    <input type="radio" id="e" name="soal10" value="e">
                    <label for="e">E. Semua Salah</label>
                </div>
            </form>
        </div>

        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <p style="text-align:left">Untuk mengganti soal silahkan pilih angka di kotak disebelah kanan</p>
    </div>


    <div class="box2" id="box2">
        <div class="smallbox" id="sb1">1</div>
        <div class="smallbox" id="sb2">2</div>
        <div class="smallbox" id="sb3">3</div>
        <div class="smallbox" id="sb4">4</div>
        <div class="smallbox" id="sb5">5</div>
        <div class="smallbox" id="sb6">6</div>
        <div class="smallbox" id="sb7">7</div>
        <div class="smallbox" id="sb8">8</div>
        <div class="smallbox" id="sb9">9</div>
        <div class="smallbox" id="sb10">10</div>

    </div>
    <button class="selesai" id="selesai">Selesai</button>

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
            <a href="rangkuman1.php"><button>Sebelumnya</button></a>
            <button class="btn1">1</button>
            <a href="ciri_pteridophyta.php"><button>Selanjutnya</button></a>
        </center>
    </div>
</div>
</body>

<!-- Mirrored from kemagnetan.github.io/bahan/migrasi hewan/1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Dec 2022 10:26:04 GMT -->

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
var radioButtons1 = document.querySelectorAll('input[name="soal1"]');
var radioButtons2 = document.querySelectorAll('input[name="soal2"]');
var radioButtons3 = document.querySelectorAll('input[name="soal3"]');
var radioButtons4 = document.querySelectorAll('input[name="soal4"]');
var radioButtons5 = document.querySelectorAll('input[name="soal5"]');
var radioButtons6 = document.querySelectorAll('input[name="soal6"]');
var radioButtons7 = document.querySelectorAll('input[name="soal7"]');
var radioButtons8 = document.querySelectorAll('input[name="soal8"]');
var radioButtons9 = document.querySelectorAll('input[name="soal9"]');
var radioButtons10 = document.querySelectorAll('input[name="soal10"]');

// Tambahkan event listener pada setiap radio button
radioButtons1.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb1");
            divSoal1.style.backgroundColor = "green";
        }
    });
});

radioButtons2.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb2");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons3.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb3");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons4.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb4");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons5.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb5");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons6.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb6");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons7.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb7");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons8.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb8");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons9.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb9");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

radioButtons10.forEach(function(radio) {
    radio.addEventListener("click", function() {
        // Jika radio button dipilih
        if (this.checked) {
            // alert("Anda memilih ciri-ciri " + this.labels[0].textContent);
            var divSoal1 = document.getElementById("sb10");
            divSoal1.style.backgroundColor = "green";

        }
    });
});

var elemen = document.getElementById("sb2");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal2");
    elemenSoal.style.display = "block";

});

var elemen = document.getElementById("sb1");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal1");
    elemenSoal.style.display = "block";

});

var elemen = document.getElementById("sb3");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal3");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb4");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal4");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb5");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal5");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb6");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal6");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb7");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal7");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb8");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal8");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb9");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal9");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb10");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal10");
    elemenSoal.style.display = "block";

});
var elemen = document.getElementById("sb1");

// Tambahkan event listener ke elemen
elemen.addEventListener("click", function() {
    // Munculkan pesan alert ketika elemen diklik
    // alert("Anda telah mengklik kotak!");
    var elemensmallbox = document.querySelectorAll(".soal");
    for (var i = 0; i < elemensmallbox.length; i++) {
        elemensmallbox[i].style.display = "none";
    }


    var elemenSoal = document.getElementById("soal1");
    elemenSoal.style.display = "block";

});



$(document).ready(function() {


    $('input[type=radio]').click(function() {
        // if ($(this).data('previously-checked')) {
        // alert('Already Selected');
        // }
        // update all as not clicked
        // $('input[type=radio]').data('previously-checked', false);
        // mark current one as checked
        // $(this).data('previously-checked', true);
        // function isColor(strColor) {
        //   var s = new Option().style;
        //   s.color = strColor;
        //   return s.color == strColor;
        // }

        // // try it out
        // isColor("red"); // true
        // isColor("reds"); // false

        var divSoal1 = document.getElementById("sb1");
        var divSoal2 = document.getElementById("sb2");
        var divSoal3 = document.getElementById("sb3");
        var divSoal4 = document.getElementById("sb4");
        var divSoal5 = document.getElementById("sb5");
        var divSoal6 = document.getElementById("sb6");
        var divSoal7 = document.getElementById("sb7");
        var divSoal8 = document.getElementById("sb8");
        var divSoal9 = document.getElementById("sb9");
        var divSoal10 = document.getElementById("sb10");
        if (divSoal1.style.backgroundColor == "green" && divSoal2.style.backgroundColor == "green" &&
            divSoal3.style.backgroundColor == "green" && divSoal4.style.backgroundColor == "green" &&
            divSoal5.style.backgroundColor == "green" && divSoal6.style.backgroundColor == "green" &&
            divSoal7.style.backgroundColor == "green" && divSoal8.style.backgroundColor == "green" &&
            divSoal9.style.backgroundColor == "green" && divSoal10.style.backgroundColor == "green") {
            document.getElementById("selesai").style.visibility = "visible";
        }


    })


    $('#selesai').on('click', function(e) {

        e.preventDefault(); // Mencegah form dikirim secara default

        // Ambil data dari form
        var nama = $('#nama').val();
        var kelas = $('#kelas').val();

        var waktu_s = <?php echo $waktu_sekarang ?>;
        // Waktu mulai diambil dari variabel JavaScript
        var startTime = new Date(waktu_s * 1000); // Kali dengan 1000 karena getTime() mengembalikan waktu dalam milidetik

        // Lakukan tindakan yang ingin diukur jarak waktunya

        // Waktu selesai
        var endTime = new Date();

        // Hitung jarak waktu (dalam milidetik)
        var timeDiff = endTime.getTime() - startTime.getTime();

        // Konversi jarak waktu ke format menit:detik:milidetik
        var minutes = Math.floor(timeDiff / 60000);
        var seconds = Math.floor((timeDiff % 60000) / 1000);
        var milliseconds = timeDiff % 1000;

        var waktu = minutes + ":" + (seconds < 10 ? "0" : "") + seconds + ":" + (milliseconds < 100 ? (milliseconds < 10 ? "00" : "0") : "") + milliseconds;

        // Tampilkan jarak waktu dalam format yang sesuai

        var soal1 = $("input[type='radio'][name='soal1']:checked").val();
        var soal2 = $("input[type='radio'][name='soal2']:checked").val();
        var soal3 = $("input[type='radio'][name='soal3']:checked").val();
        var soal4 = $("input[type='radio'][name='soal4']:checked").val();
        var soal5 = $("input[type='radio'][name='soal5']:checked").val();
        var soal6 = $("input[type='radio'][name='soal6']:checked").val();
        var soal7 = $("input[type='radio'][name='soal7']:checked").val();
        var soal8 = $("input[type='radio'][name='soal8']:checked").val();
        var soal9 = $("input[type='radio'][name='soal9']:checked").val();
        var soal10 = $("input[type='radio'][name='soal10']:checked").val();

        var data = {
            kuis: 'kuis1',
            nama: nama,
            kelas: kelas,
            waktu: waktu,
            soal1: soal1,
            soal2: soal2,
            soal3: soal3,
            soal4: soal4,
            soal5: soal5,
            soal6: soal6,
            soal7: soal7,
            soal8: soal8,
            soal9: soal9,
            soal10: soal10,
        };

        var delayInMilliseconds = 1000; //1 second
        // Kirim data ke server menggunakan AJAX
        $.ajax({
            type: 'POST',
            url: 'simpan_data.php',
            data: {
                data: data
            },
            success: function(data) {
                // Tampilkan pesan sukses menggunakan sweetalert
                Swal.fire({
                    title: 'Data Berhasil Disimpan',
                    // showCancelButton: true,
                    confirmButtonText: 'Oke',
                }).then((result) => {
                    //menyimpan data session
                    localStorage.setItem('username', nama + '_1');
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        // Swal.fire('Data berhasil disimpan!', '', 'success');
                        // setTimeout(function() {
                        document.location.href = `ciri_pteridophyta.php`;
                        // }, delayInMilliseconds);

                    }
                })

            },
            error: function(xhr, status, error) {
                // Tampilkan pesan error menggunakan sweetalert
                Swal.fire(
                    'Gagal menyimpan data!',
                    'Terjadi kesalahan: ' + error,
                    'error'
                );
            }
        });
    });





    $('#form-data').on('submit', function(e) {
        e.preventDefault(); // Mencegah form dikirim secara default

        // Ambil data dari form
        var nama = $('#nama').val();
        var kelas = $('#kelas').val();

        // Simpan data dalam array
        var data = {
            nama: nama,
            kelas: kelas
        };

        document.getElementById("box-form").style.display = "none";
        document.getElementById("box1").style.display = "block";
        document.getElementById("box2").style.visibility = "visible";
        Swal.fire(
            'Selamat Mengerjakan!',
            '',
            'success'
        );

    });
});

var waktu = <?php echo $waktu_15_menit - time(); ?>;
var timer = document.getElementById("timer");

var hitung = setInterval(function() {
    var menit = Math.floor(waktu / 60);
    var detik = waktu % 60;

    timer.innerHTML = menit + " menit " + detik + " detik";

    if (waktu <= 0) {
        clearInterval(hitung);
        timer.innerHTML = "Waktu habis!";
    } else {
        waktu--;
    }
}, 1000);

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
</script>