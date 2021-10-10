<?php 

session_start();

require "koneksi.php";

if( !isset($_SESSION["login"]) ) {

  header("location: login.php");
  exit;
}



 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Opening</title>
  </head>
  <body>
          <video controls autoplay loop muted>
            <source src="asset/video/01_Opening_NEW_02.mp4" type="video/mp4">
                <!-- <source src="" type="video/ogg"> -->
          </video>
          <div class="bg">
              <img src="asset/Logo_Not_A_dead_end_01.png">
            </div>
        
    <div class="container-fluid">
            
            <!-- <div class="h-100 d-flex justify-content-end align-items-start">
              <a href="#" onclick="about()"><i class="fa fa-address-card about"> <span>About</span> </i></a>
            </div>
           <div class="h-100 d-flex justify-content-start align-items-start">
              <a href="index.php"><i class="fa fa-home home"> <span>Home</span> </i></a>
           </div> -->
          <div class="h-100 d-flex justify-content-center align-items-center">


             <a id="new" class="btn btn-outline-warning tombol-start tombol-new fokus" href="game.php" role="button">Play Game</a>
            
             <!-- <button type="button" class="btn btn-warning tombol-start">Warning</button> -->
          </div>

          <!-- The Modal -->
          <!-- <div id="modalAbout" class="modal"> -->

            <!-- Modal content -->
         <!--    <div class="modal-content">
              <span class="close">&times;</span>
              <p>Some text in the Modal..</p>
            </div>

          </div> -->
             <!--  <div id="modalAbout" class="modal" style="z-index: 200;">
            
                <div class="d-flex justify-content-center shadow-lg modal-content modal-about">

                   <span onclick="close_button()" class="close close-about">&times;</span>
            
                    <h3 class="mb-3 text-center">About NOT A DEAD END </h3>
                    <div class="card-about">
                    <p style="">This online video game, called NOT A DEAD END, developed by artist Fajar Riyanto, is a simulation of the journey of a refugee seeking asylum in another country to find a better (more humane) life. Their struggle is anything but easy and on their often perilous journeys, they are continually faced with uncertainties. NOT A DEAD END, which takes its cue from the 1980s arcade game Pac-Man, invites players to navigate a maze and overcome different obstacles to find their way out. With this game, Fajar aims to raise awareness about the situation of refugees in Indonesia and around the world. It also functions as a fundraising tool in support of a community of nearly 200 refugees living in an abandoned building in Kalideres, Jakarta, in particular to establish a fund to support the self-run school at the camp. <br><br>

                    The game can be played here, on this website, and will also be presented in the form of a “dingdong”, or arcade machine, as part of the 16th Jogja Biennale entitled “Roots <> Roots” in Yogyakarta (6 October–14 November 2021). <br><br>

                    You can play the game for free, but if you’d like (and are able) to make a donation in support of the Kalideres refugee community, please visit: <a href="https://publishingsolidarity.wixsite.com/website">https://publishingsolidarity.wixsite.com/website.</a><br><br>

                    NOT A DEAD END <b>was developed in collaboration with</b>:<br>
                    Fajar Riyanto: Initiator, artistic concept & production<br>
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
                    Fajar Riyanto (b. Yogyakarta, 1984, lives and works in Yogyakarta) graduated from the Department of Photography of the Indonesian Institute of Fine Arts. Fajar sees art practice as a tool to unpack and question dominant societal norms, inequality and other power structures in the world. His works take the form of photography, video, text, installation, workshops, community events, performance and more, start from his own, embodied experience of living in a marginalised neighbourhood and working with disempowered communities, and explore daily phenomena such as family, community, kinship and local issues. Apart from his individual practice, Fajar is a member of Ruang MES 56, a Yogyakarta based collective which uses photography and video as medium and method for their artistic practice. Fajar is also a participating artist in “A Pond is the Reverse of an Island”. <a href="https://iamfajarriyanto.wordpress.com"> https://iamfajarriyanto.wordpress.com</a><br><br> -->

                    <!-- <b>About “A Pond is the Reverse of an Island”</b><br>
                    'A Pond is the Reverse of an Island' is a collective platform working in solidarity with the Kalideres refugee camp in Jakarta, and refugees across Indonesia. 'A Pond...' brings artists and collectives together with activists, lawyers, community organisers and the refugee community, developing artistic strategies to “act together”; directly supporting the daily needs of those living in the Kalideres camp through community activities, fundraising platforms and alternative infrastructures, as well as “think together”; making space to speculate about alternative futures of migration and citizenship.<br><br>

                    A Pond.. began in March 2020 with <a href="https://publishingsolidarity.wixsite.com/website">Publishing Solidarity</a>, a downloadable children’s colouring book in Farsi, Indonesian and English, sharing the story of refugees in Indonesia and raising funds to support the Kalideres camp during the Covid-19 pandemic. Currently A Pond.. is working with friends at the Kalideres camp to develop community activities, fundraising platforms, physical infrastructure, alternative economies, and ways to amplify the struggle of the camp and refugees in Indonesia more broadly.<br><br>

                    ‘A Pond…” participating artists and organisers are: Anang Saptoto, Badan Kajian Pertanahan, Bakudapan Food Study Group, Fajar Riyanto, Mumtaz Khan Chopan, Sanne Oorthuizen and Alec Steadman (Bodies of Power / Power for Bodies), M. Sigit Budi Santoso and Rifandi Nugroho (Kolektif Kurator Kampung), Timbil Budiarto (Lifepatch - citizen initiative for art, science and technology). -->

                      
          <!--           </p>
                    </div>
                  </div>
             </div> -->

          <audio hidden autoplay loop>
            <source src="asset/audio/game.ogg" type="audio/mpeg">
            Browsermu tidak mendukung tag audio
          </audio>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      var opening = document.getElementById("new");
      window.setTimeout(function () { 
            opening.focus();
      }, 1000); 
    </script>

    <script  src="asset/js/script.js"></script>

  </body>
</html>