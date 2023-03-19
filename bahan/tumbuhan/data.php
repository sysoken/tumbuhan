
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

if ($_GET['kuis']=='1' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XA") {
	$data = [];

	$query = "SELECT * FROM tb_kuis1 where kelas = 'XA'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='1' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XB") {
	$data = [];

	$query = "SELECT * FROM tb_kuis1 where kelas = 'XB'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='2' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XA") {
	$data = [];

	$query = "SELECT * FROM tb_kuis2 where kelas = 'XA'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='2' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XB") {
	$data = [];

	$query = "SELECT * FROM tb_kuis2 where kelas = 'XB'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='3' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XA") {
	$data = [];

	$query = "SELECT * FROM tb_kuis3 where kelas = 'XA'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='3' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XB") {
	$data = [];

	$query = "SELECT * FROM tb_kuis3 where kelas = 'XB'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='evaluasi' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XA") {
	$data = [];

	$query = "SELECT * FROM tb_evaluasi where kelas = 'XA'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}

if ($_GET['kuis']=='evaluasi' && $_GET['sekolah']=="SMA1" && $_GET['kelas']=="XB") {
	$data = [];

	$query = "SELECT * FROM tb_evaluasi where kelas = 'XB'";
	$data1 = $koneksi->prepare($query);
	// $data1->bind_param('ss', $jurusan, $keyword);
	$data1->execute();
	$res1 = $data1->get_result();
	while ($row = $res1->fetch_assoc()) {
	    $data[] = $row;
	}
	echo json_encode($data);
}