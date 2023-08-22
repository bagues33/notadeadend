<?php 

session_start();

$koneksi = mysqli_connect("localhost","root","","db-game-labirin");

// require "koneksi.php";
	

	$nama = $_SESSION['user'];
	$karakter = $_POST['datakarakter'];
	$waktuMulai = $_POST['waktuMulai'];
	$waktuFinish = $_POST['waktuFinish'];
	$status = $_POST['status'];
	$tgl = $_POST['tgl'];

	if($waktuFinish) {
		require "cetak-terima.php";
	} else {
		require "cetak-tolak.php";
	}

	// if ($nama) {
	// 	echo "terima";
	// } elseif ($waktuFinish) {
	// 	require "cetak.php";
	// }



mysqli_query($koneksi, "INSERT INTO report VALUES('','$nama','$karakter','$waktuMulai','$waktuFinish','$status','$tgl')");

	echo $nama;
	echo $karakter;
	echo $waktuMulai;
	echo $waktuFinish;

	// echo json_encode(array("id"=>7,"bagus"=>$karakter));

 ?>
