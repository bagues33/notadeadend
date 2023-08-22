<?php 

session_start();

require "koneksi.php";

$session = session_id();
$time = time();
$time_check=$time-600;

$result = mysqli_query($koneksi, "SELECT * FROM online WHERE session='$session'");

$count=mysqli_num_rows($result);
if($count=="0") {
  mysqli_query($koneksi, "INSERT INTO online VALUES ('','$session','$time')");
} else {
    mysqli_query($koneksi, "UPDATE online SET waktu='$time' WHERE session='$session'");
}

$result1 = mysqli_query($koneksi, "SELECT * FROM online");
$count_user_online = mysqli_num_rows($result1);
// echo "user Online : $count_user_online";

mysqli_query($koneksi, "DELETE FROM online WHERE waktu<$time_check");

if( !isset($_SESSION["login"]) ) {

  header("location: login.php");
  exit;
}




  // $nama = $_SESSION['user'];
  // $karakter = '<span id="cetak"></span>';
  // $waktu = '<span id="min"></span>:<span id="sec"></span>';
  // $tampil = '<span id="heading">goblok</span>';

  // mysqli_query($koneksi, "INSERT INTO report VALUES('','$tampil','dasdsad','sadasd','sadasd')");

  // return mysqli_affected_rows($koneksi);  
  
  // echo $_POST['karakter'];


?>



<!DOCTYPE html>
<html lang="en" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Pickle Rick Maze Game</title>
  </head>

<body style="position: fixed;" onkeydown="tombol()">

  <html lang="en-GB">
    <head>
    <meta charset="utf-8">
    <body>
      <div id="gradient"></div>
      <!-- <marquee behavior="scroll" direction="left" class="text-light">NOT A DEAD END. To make a donation in support of the Kalideres refugee community, please visit : <a href="https://publishingsolidarity.wixsite.com/website." style="color: red; text-decoration: none;">https://publishingsolidarity.wixsite.com/website.</a>
</marquee> -->
        <div class="wrapper">
          <div class="marquee">
            <p>
             NOT A DEAD END. To make a donation in support of the Kalideres refugee community, please visit : <a href="https://publishingsolidarity.wixsite.com/website." style="color: red; text-decoration: none;">https://publishingsolidarity.wixsite.com/website.</a>
            </p>
            <p>
             NOT A DEAD END. To make a donation in support of the Kalideres refugee community, please visit : <a href="https://publishingsolidarity.wixsite.com/website." style="color: red; text-decoration: none;">https://publishingsolidarity.wixsite.com/website.</a>
            </p>
          </div>
        </div>
      <div id="page">
        <div id="Message-Container">
          <div id="message">
            <h1>Congratulations!</h1>
            <p>You are done.</p>
             <p>Nama : <?php echo $_SESSION['user']; ?></p>
            <!-- <p><span>Karakter : </span><span id="cetak"></span></p> -->
            <!-- <p><span>Waktu anda : </span><span id="min"></span>:<span id="sec"></span></p> -->
            <p id="moves"></p>
            <!-- <input id="okBtn" type="button" onclick="toggleVisablity('Message-Container')" value="Cool!" /> <br> <br> -->
            <!-- <a href="game.php"><input id="okBtn" type="button" value="Main lagi!" /></a> -->
          </div>
  		
        </div>
        <div style="display: none;">
          <span id="cetak"></span>
          <span id="min">00</span>:<span id="sec">00</span>
          <span id="jam1"></span>
          <span id="jam2"></span>
        </div>
        <!-- <span id="menit"></span>:<span id="detik"></span> -->
        <div id="menu">
            <input id="startMazeBtn" type="button" onclick="makeMaze()" value="Start" />
            <div class="custom-select">
              <select id="diffSelect" style="display: none;">
                <!-- <option value="15">Easy</option> -->
      		      <option value="25">Medium</option>
                <!-- <option value="35">Hard</option> -->
                         <option value="10">Easy</option>
                          <!-- <option value="38">Extreme</option>-->
              </select>
            </div>
            <a href="logout.php"><input id="logout" type="button" value="Logout" /></a>
            
        </div>
  
        <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="d-flex align-items-center shadow-lg modal-content game">
            <h3 class="mb-4 text-light">PILIH KARAKTER</h3>
            <!-- <span class="close">&times;</span> -->
          <div class="row row-cols-1 row-cols-md-3 g-4 kotak-karakter">
          <a id="gambar1" nama="ismail" class="fokus" href="#">
            <div class="col">
              <div class="card card-karakter" style="z-index: 6;">
              <img src="asset/1.gif" class="card-img-top" alt="...">    
                <!-- <a href="#" id="gambar1" nama="paijo"><img src="asset/1.gif" class="card-img-top" alt="..."></a> -->
                <div class="card-body text-center">
                  <h5 class="card-title">Ismail (27th)</h5>
                </div>
                <div class="tooltip ">
                      <p>pemuda berusia 27 tahun ini sudah 5 tahun keluar dari negaranya, karena adanya konflik di negaranya dan Bencana Alam. Krisis air dan krisis pangan yang mengakibatkan seluruh keluarganya meninggal. Memutuskan untuk keluar dari negaranya untuk belajar ke luar negeri agar nantinya dia dapat kembali lagi ke tanah kelahirannya untuk memperbaiki wilayahnya yang terdampak krisis dari pemanasan global.</p>
                  </div>
              </div>
            </div>
          </a>
          <a class="fokus" id="gambar2" nama="della" href="#">
            <div class="col">
              <div class="card card-karakter" style="z-index: 5;">
                <div class="tooltip ">
                      <p>seorang tokoh (pemimpin) dan merupakan aktivis sosial yang selalu menyerukan perdamaian dan anti perang. Rumahnya, sudah beberapa kali menjadi sasaran teror.Namun, karena peperangan yang sudah lebih dari 25 tahun dan tak kunjung usai, kemudian mengakibatkan terjadinya resesi di negaranya, kemudian dia memutuskan untuk keluar dari negaranya.</p>
                  </div>
                  <img src="asset/2.gif" class="card-img-top" alt="...">
                <!-- <a href="#" id="gambar2" nama="paimen"><img src="asset/2.gif" class="card-img-top" alt="..."></a> -->
                <div class="card-body text-center">
                  <h5 class="card-title">Della (57th)</h5>
                </div>
              </div>
            </div>
          </a>
          <a class="fokus" href="#" id="gambar3" nama="bana">
            <div class="col">
              <div class="card card-karakter" style="z-index: 4;">
                <div class="tooltip ">
                      <p>seorang mahasiswa seni di sebuah universitas terkenal di negaranya. Sudah 1 tahun dia pergi meninggalkan negaranya karena adanya banyak ancaman seperti; perang dan kekerasan terhadap anak-anak. Ia ingin menggunakan seni untuk membantu membicarakan isu kemanusian, perdamaian dan anti kekerasan terhadap anak.</p>
                  </div>
                  <img src="asset/3.gif" class="card-img-top" alt="...">
                <!-- <a href="#" id="gambar3" nama="paijem"><img src="asset/3.gif" class="card-img-top" alt="..."></a> -->
                <div class="card-body text-center">
                  <h5 class="card-title">Bana (19th)</h5>
                </div>
              </div>
            </div>
          </a>
          <a class="fokus" href="#" id="gambar4" nama="azza">
            <div class="col">
              <div class="card card-karakter" style="z-index: 3;">
                <div class="tooltip ">
                      <p>Sebagian besar hidupnya hanya untuk bertahan hidup dengan berpindah pindah tempat tinggal karena adanya peperangan dan bencana alam, saat ini dia hanya tinggal bersama 1 orang anak laki-laki ya. Banyak saudara dan orang-orang disekitarnya meninggal akibat kelaparan. Dia memutuskan untuk mencari suaka dengan harapan akan mendapatkan kehidupan yang lebih layak untuk  anaknya di masa depan.</p>
                  </div>
                  <img src="asset/4.gif" class="card-img-top" alt="...">
                <!-- <a href="#" id="gambar4" nama="paino"><img src="asset/4.gif" class="card-img-top" alt="..."></a> -->
                <div class="card-body text-center">
                  <h5 class="card-title">Azza (65th)</h5>
                </div>
              </div>
            </div>
         </a>
        <a class="fokus" href="#" id="gambar5" nama="yusuf">
          <div class="col">
            <div class="card card-karakter" style="z-index: 2;">
              <div class="tooltip ">
                    <p>Tinggal di sebuah wilayah yang cukup mencekam, banyak sekali terjadi konflik. ada dua jenis perang yang harus dia hadapi konflik antar suku serta perang antar geng kartel narkoba. perang-perang ini telah membuat  teman-temannya meninggal di usia yang sangat muda. Merasa muak dengan keadaan ini, dia kemudian pergi ke luar negeri dengan harapan mendapatkan kehidupan yang lebih baik dalam mencapai cita-citanya di masa depan. Ia juga mengajak beberapa temannya untuk pergi dari negaranya agar terhindar dari konflik yang mengerikan.</p>
                </div>
                <img src="asset/5.gif" class="card-img-top" alt="...">
              <!-- <a href="#" id="gambar5" nama="paidi"><img src="asset/5.gif" class="card-img-top" alt="..."></a> -->
              <div class="card-body text-center">
                <h5 class="card-title">Yusuf (17th)</h5>
              </div>
            </div>
          </div>
        </a>
        <a class="fokus" href="#" id="gambar6" nama="mala">
          <div class="col">
            <div class="card card-karakter"style="z-index: 1;">
              <div class="tooltip ">
                    <p>Konflik yang terjadi di wilayahnya selama lebih dari 20 tahun, memaksa dia tidak dapat melanjutkan pendidikannya. Dia kemudian membantu keluarganya dan para tetangganya untuk bertahan hidup dan terhindar dari konflik yang berkepanjangan di daerahnya. Dia mengorganisir orang-orang di wilayahnya untuk keluar dari negaranya agar mendapatkan kehidupan yang lebih layak dan mendapatkan pendidikan yang baik. Selama lebih dari 2 tahun dia mempersiapkan strategi agar dapat keluar dari wilayah konfliknya.</p>
                </div>
                <img src="asset/6.gif" class="card-img-top" alt="...">
              <!-- <a href="#" id="gambar6" nama="paiman"><img src="asset/6.gif" class="card-img-top" alt="..."></a> -->
              <div class="card-body text-center">
                <h5 class="card-title">Mala (29th)</h5>
              </div>
            </div>
          </div>
        </a>
          </div>
        </div>
      </div>
        <div id="view">
          <div id="mazeContainer">
  		      <img id="playerimg" src="asset/4.gif" style="display:none"/>
            <canvas id="mazeCanvas" class="border" height="1100" width="1100"></canvas>
          </div>
        </div>
      </div>
        <audio id="audio1" hidden autoplay  loop>
            <source id="musik1" src="asset/audio/opening-karakter.ogg" type="audio/mpeg">
            Browsermu tidak mendukung tag audio
        </audio>
        <audio id="audio2" hidden loop>
            <source id="musik2" src="asset/audio/game.ogg" type="audio/mpeg">
            Browsermu tidak mendukung tag audio
        </audio>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js"></script>
    </body>
  </html>
  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.min.js'></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <script  src="asset/js/script.js"></script>
    

</body>

</html>
