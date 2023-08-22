<?php 


// session_start();

$foto = $_SESSION["foto"];
$email = $_SESSION["email"];
$name = $_SESSION["user"];

require_once __DIR__ . '/vendor/autoload.php';

require 'koneksi.php';

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ID Card</title>
  <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    <img src="asset/tolak.png">
    <h2 style="margin-top: -13.5em; margin-left: 11.3em;">'.$name.'</h2>
    <h2 style="margin-top: 2.8em; margin-left: 11.3em;">'.$email.'</h2>
    <img style="width: 204px; height: 243px; margin-top: -10.9em; margin-left: 1.6em;" src="img/'.$foto.'">
</body>
</html>
  ';

$mpdf->WriteHTML($html);
$mpdf->Output('asset/pdf/ID-Card-2.pdf', 'F');
// $mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('asset/PHPMailer-master/src/Exception.php');
include('asset/PHPMailer-master/src/PHPMailer.php');
include('asset/PHPMailer-master/src/SMTP.php');

if($foto) {
  
  $email_pengirim = 'scriptmediaindonesia@gmail.com';
  $nama_pengirim = 'Not A Dead End';
  $email_penerima = $email;
  $subjek = 'congrats, you got an id card!, but.....';
  $pesan = '

    <h5>Sorry you have not succeeded in completing this mission. But you still get an id card!</h5>
    <br>
     <h5>click below to download your id card</h5>
    

  ';
  $mail = new PHPMailer();
  // $mail->From = $email_pengirim;
  // $mail->FromName = $nama_pengirim;
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->Username = $email_pengirim;
  $mail->Password = 'idhsmuprgrmhswpk';
  $mail->Port = 465;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'ssl';
  $mail->SMTPDebug = 2;
  $mail->AddAttachment('asset/pdf/ID-Card-2.pdf','ID-Card.pdf');
  $mail->setFrom($email_pengirim, $nama_pengirim);
  $mail->addAddress($email_penerima);
  $mail->isHTML(true);
  $mail->Subject = $subjek;
  $mail->Body = $pesan;

  $send = $mail->send();

  if($send) {
    echo 'Email berhasil dikirim';
  } else {
    echo 'Email gagal dikirim' .$mail->ErrorInfo;
  }

} 

echo "<script>alert('Your ID card has been successfully sent to your email!')</script>";


 ?>

