<?php 

session_start();

require 'koneksi.php';



if (isset($_POST["register"])) {

  //   $gambar = upload();
  //   if (!$gambar) {
  //   return false;
  // }
  // upload();

  // $_SESSION["foto"] = $namaFileBaru;

  // $_SESSION["email"] = $_POST['email'];
  // $_SESSION["username"] = $_POST['username'];

  if(registrasi($_POST) > 0) {
    echo "<script>
        alert('New user added successfully!');
         window.location='login.php';
      </script>";

  } else {
    echo mysqli_error($koneksi);
  }

  
}




$tanggal= mktime(date("m"),date("d"),date("Y"));

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/mdb.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Register</title>
  </head>
  <body onload="fokus(); capture()" onkeydown="saveFoto()">
     <video controls autoplay loop>
          <source src="asset/video/01_Opening_NEW_02.mp4" type="video/mp4">
          <!-- <source src="mov_bbb.ogg" type="video/ogg"> -->
      </video>
        <div class="bg">
              <img src="asset/Logo_Not_A_dead_end_01.png">
            </div>
    <section class="vh-100" id="links_container">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="h-100 d-flex flex-row justify-content-between align-items-start">
                <a id="register-home" class="login-home fokus" href="index.php"><i class="fa fa-home"> <span>Home</span></i></a>
                <a class="kembali fokus" href="user.php"><i class="fa fa-arrow-left  register-kembali"> <span>Back</span></i></a>
                <a class="login-about fokus" href="#" onclick="about()"><i class="fa fa-address-card"> <span>About</span></i></a>
            </div>
            <!--  <div class="h-100 d-flex justify-content-center align-items-center tengah">
             
            </div> -->
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 mt-4">
              <div class="card shadow-2-strong card-register" style="border-radius: 1rem;">
                <div class="card-body p-4 ps-5 pe-5 text-center kotak-login kotak-register">

                  <h3 class="mb-4">Register</h3>
                  <form action="" method="POST" enctype="multipart/form-data">
                    <div class="form-outline form-white mb-4">
                      <input type="text" id="username" name="username" class="form-control form-control-lg fokus" required />
                      <label class="form-label">Username</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="exampleInputEmail1" name="email" class="form-control form-control-lg fokus" aria-describedby="emailHelp" required />
                      <label class="form-label" for="typeEmailX">Email</label>
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="password" name="password" class="form-control form-control-lg fokus" required />
                      <label class="form-label" for="typePasswordX">Password</label>
                    </div>
                    <div class="form-outline form-white mb-2">
                      <input type="password" id="password2" name="password2" class="form-control form-control-lg fokus" required />
                      <label class="form-label" for="typePasswordX">Repeat Password</label>
                    </div>
                    <!-- <a class="link-danger fs-3 fokus" onclick="startWebCam()" href="#"><i class="fa fa-camera"></i></a> -->
                     <!-- <a class="link-danger fs-3 fokus" onclick="modalFoto()" href="#"><i class="fa fa-camera"></i></a> -->
                    <label for="formFileSm" class="form-label text-white mb-3">Insert your portrait</label>
                      <input class="form-control form-control-sm fokus" id="gambar" name="gambar" type="file" />
                      
                     <input type="hidden" name="tanggal" value="<?php echo date('d-M-Y', $tanggal) ?> ">
                    
                    <button class="btn btn-lg btn-block btn-login mt-2 fokus" type="submit" name="register">Register</button>
                  </form>
                  <!-- <hr class="my-4"> -->
                   <p class="mt-3">Have already an account? <a class="fokus" href="login.php" style="color: red;">Login here!</a></p>
                  <!-- <button class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                  <button class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;" type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button> -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

        <div id="modalAbout" class="modal" style="z-index: 200;">
            
                <div class="d-flex justify-content-center shadow-lg modal-content modal-about">

                   <span onclick="close_button()" class="close close-about">&times;</span>
            
                    <h3 class="mb-3 text-center">About NOT A DEAD END </h3>
                    <div class="card-about">
                    <p style="">This online video game, called NOT A DEAD END, developed by artist Fajar Riyanto, is a simulation of the journey of a refugee seeking asylum in another country to find a better (more humane) life. Their struggle is anything but easy and on their often perilous journeys, they are continually faced with uncertainties. NOT A DEAD END, which takes its cue from the 1980s arcade game Pac-Man, invites players to navigate a maze and overcome different obstacles to find their way out. With this game, Fajar aims to raise awareness about the situation of refugees in Indonesia and around the world. It also functions as a fundraising tool in support of a community of nearly 200 refugees living in an abandoned building in Kalideres, Jakarta, in particular to establish a fund to support the self-run school at the camp. <br><br>

                    The game can be played here, on this website, and will also be presented in the form of a “dingdong”, or arcade machine, as part of the 16th Jogja Biennale entitled “Roots <> Roots” in Yogyakarta (6 October–14 November 2021). <br><br>

                    You can play the game for free, but if you’d like (and are able) to make a donation in support of the Kalideres refugee community, please visit: <a href="https://publishingsolidarity.wixsite.com/website">https://publishingsolidarity.wixsite.com/website.</a><br><br>

                    NOT A DEAD END <b>was developed in collaboration with</b>:<br>
                    Fajar Riyanto: Initiator, storyline, artistic director & producer<br>
                    Kalani Abdullah: Story writer<br>
                    Andreas Siagian: Electronics<br>
                    Scriptmedia: game developer<br>
                    Iksan Wibowo: Animation<br>
                    George Cornelis Fren: video editor<br>
                    Parjianto a.k.a Bege: physical display structure<br>
                    Bona Zustama: music composer<br>
                    Mumtaz Khan Chopan: content and curatorial advisor<br>
                    Sanne Oorthuizen: curatorial advisor and English text editor<br>
                    Alec Steadman: curatorial advisor<br><br>

                    <b>About Fajar Riyanto</b><br>
                    Fajar Riyanto (b. Yogyakarta, 1984, lives and works in Yogyakarta) graduated from the Department of Photography of the Indonesian Institute of Fine Arts. Fajar sees art practice as a tool to unpack and question dominant societal norms, inequality and other power structures in the world. His works take the form of photography, video, text, installation, workshops, community events, performance and more, start from his own, embodied experience of living in a marginalised neighbourhood and working with disempowered communities, and explore daily phenomena such as family, community, kinship and local issues. Apart from his individual practice, Fajar is a member of Ruang MES 56, a Yogyakarta based collective which uses photography and video as medium and method for their artistic practice. Fajar is also a participating artist in “A Pond is the Reverse of an Island”. <a href="https://iamfajarriyanto.wordpress.com"> https://iamfajarriyanto.wordpress.com</a><br><br>

                   <!--  <b>About “A Pond is the Reverse of an Island”</b><br>
                    'A Pond is the Reverse of an Island' is a collective platform working in solidarity with the Kalideres refugee camp in Jakarta, and refugees across Indonesia. 'A Pond...' brings artists and collectives together with activists, lawyers, community organisers and the refugee community, developing artistic strategies to “act together”; directly supporting the daily needs of those living in the Kalideres camp through community activities, fundraising platforms and alternative infrastructures, as well as “think together”; making space to speculate about alternative futures of migration and citizenship.<br><br>

                    A Pond.. began in March 2020 with <a href="https://publishingsolidarity.wixsite.com/website">Publishing Solidarity</a>, a downloadable children’s colouring book in Farsi, Indonesian and English, sharing the story of refugees in Indonesia and raising funds to support the Kalideres camp during the Covid-19 pandemic. Currently A Pond.. is working with friends at the Kalideres camp to develop community activities, fundraising platforms, physical infrastructure, alternative economies, and ways to amplify the struggle of the camp and refugees in Indonesia more broadly.<br><br>

                    ‘A Pond…” participating artists and organisers are: Anang Saptoto, Badan Kajian Pertanahan, Bakudapan Food Study Group, Fajar Riyanto, Mumtaz Khan Chopan, Sanne Oorthuizen and Alec Steadman (Bodies of Power / Power for Bodies), M. Sigit Budi Santoso and Rifandi Nugroho (Kolektif Kurator Kampung), Timbil Budiarto (Lifepatch - citizen initiative for art, science and technology).
 -->
                      
                    </p>
                    </div>
                  </div>
             </div>

             <div id="modalFoto" class="modal" style="z-index: 200;">
            
                <div class="d-flex justify-content-center align-items-center shadow-lg modal-content modal-about">

                   <span onclick="close_button()" class="close close-about">&times;</span>
            
                    <video id="video" autoplay>
                      <!-- <embed src="http://localhost:8081"></embed> -->
                       <!-- <source src="http://192.168.100.56:8081" type="video/mp4"> -->
                        <!-- <source src="movie.ogg" type="video/ogg"> -->
                    </video>
                    <button id="snap">Ambil Gambar</button>

                    <canvas id="canvas" width="425" height="300"></canvas>
                      <!-- <img src="" id="gambare"> -->
                    <button id="save">Simpan Gambar</button>
                    
                </div>
                  
             </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
     <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <script>
             window.setTimeout(function () { 
                document.getElementById('register-home').focus(); 
              }, 1000); 

        //        document.onkeydown = function(e){
        //      var isi;
        //      switch(e.keyCode){
        //       case 40: 
        //       isi = "bawah";
        //       break;
        //     }
        //      if(isi){   
        //           // document.getElementById("login").focus();
        //           document.getElementById("username").focus();
        //           // alert("hello");
        //       }
        // }


    

    </script>
    <script type="text/javascript" src="asset/js/mdb.min.js"></script>
      <script  src="asset/js/script.js"></script>
  </body>
</html>