<?php 

$koneksi = mysqli_connect("localhost","root","","db-game-labirin");


function query($query) {
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}


function registrasi($data) {
	global $koneksi;

	$username = strtolower(stripcslashes($data["username"]));
	$email = strtolower(stripcslashes($data["email"]));
	$password = mysqli_real_escape_string($koneksi, $data["password"]);
	$password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
	$tgl = mysqli_real_escape_string($koneksi, $data["tanggal"]);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

if ($gambar) {
		$image = $gambar;
	} else {
		$image = 'profil.jpg';
	}

	// $gambar = $_SESSION['gambar'];

	//cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");
	if(mysqli_fetch_assoc($result)) {
		echo "<script>alert('username already exists!');</script>";
		return false;
	}

	if($password !== $password2) {

		echo "<script>alert('Confirm password does not match!');</script>";

		return false;
	}

	//enskripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke database
	mysqli_query($koneksi, "INSERT INTO user VALUES('','$username','$email','$password','$tgl','$image')");

	return mysqli_affected_rows($koneksi);	

}

function upload() {
	global $namaFileBaru;

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yanga diupload
	if ($error === 4) {
		echo "<script>alert('choose your photo first!')</script>";
		return false;
	}

	//cek apakah yang diupload gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));


	if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>alert('uploaded is not a photo!')</script>";
		return false;
	} 

	if($ukuranFile > 1000000) {
		echo "<script>alert('image size is too big!')</script>";
		return false;
	}

	//generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	
	//lolos pengecekan gambar, siap di upload
	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

	return $namaFileBaru;
}



 ?>