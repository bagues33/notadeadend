<?php

session_start();

// $koneksi = mysqli_connect("localhost","root","","db-game-labirin");

        // requires php5
        define('UPLOAD_DIR', 'img/');
        $img = $_POST['imgBase64'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $namafile = uniqid() . '.png';
        $file = UPLOAD_DIR . $namafile;
        $success = file_put_contents($file, $data);
     
        print $success ? $file : 'Unable to save the file.';

        $_SESSION['gambar'] = $namafile;
// mysqli_query($koneksi, "INSERT INTO user (gambar) VALUES('$namafile')");

?>
