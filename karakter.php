<?php 

session_start();

// if( !isset($_SESSION["login"]) ) {

//   header("location: login.php");
//   exit;
// }

require "koneksi.php";

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
    <!-- <link rel="stylesheet" href="asset/css/style.css"> -->
    <title>Karakter</title>
    <style>
      table, th, td {
   border: 1px solid black;
    
}
td{
    
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;

}
.selected{
       background-color: #000;
}
}
    </style>
  </head>
  <body style="background-color: #b0bec5;">
    <div class="d-flex flex-row justify-content-center align-items-center karakter" style="height: 0vh;">

      <div class="d-flex flex-row justify-content-between align-items-start fixed-top pb-3" style="background-color: #b0bec5;">
        <a href="index.php"><i class="fa fa-home login-home"> Home</i></a>
        <a href="logout.php"><i class="fa fa-arrow-left mt-2 karakter-kembali"> Kembali</i></a>
        <a href="#"><i class="fa fa-address-card login-about"> About</i></a>
      </div>
        <h2 id="pilih-karakter" style="position: absolute; top: 4em; color: #0A6FE1;">Pilih Karakter</h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4 kotak-karakter">
      <table id="myTable" style="width: 500px;">
        <tr>
          <td class="selected">
            <div class="col">

              <div class="card card-karakter" style="z-index: 6;">
               
                <a href=""><img src="asset/1.gif" id="image1" class="card-img-top" alt="..."></a>
                <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                </div>
                <div class="tooltip ">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corrupti voluptates molestias officia aut porro earum praesentium id quas quis reprehenderit.</p>
                  </div>
              </div>
            </div>
          </td>
          <td>
            <div class="col">
              <div class="card card-karakter" style="z-index: 5;">
                <div class="tooltip ">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corrupti voluptates molestias officia aut porro earum praesentium id quas quis reprehenderit.</p>
                  </div>
                <a href="game.php"><img src="asset/2.gif" id="image2" class="card-img-top" alt="..."></a>
                <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div class="col">
              <div class="card card-karakter" style="z-index: 4;">
                <div class="tooltip ">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corrupti voluptates molestias officia aut porro earum praesentium id quas quis reprehenderit.</p>
                  </div>
                <img src="asset/3.gif" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="col">
              <div class="card card-karakter" style="z-index: 3;">
                <div class="tooltip ">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corrupti voluptates molestias officia aut porro earum praesentium id quas quis reprehenderit.</p>
                  </div>
                <img src="asset/4.gif" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </td>
          <td>
            <div class="col">
              <div class="card card-karakter" style="z-index: 2;">
                <div class="tooltip ">
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corrupti voluptates molestias officia aut porro earum praesentium id quas quis reprehenderit.</p>
                  </div>
                <img src="asset/5.gif" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="card-title">Card title</h5>
                </div>
              </div>
            </div>
          </td>
          <td>
            <a href="karakter.php">
              <div class="col">
                <div class="card card-karakter"style="z-index: 1;">
                  <div class="tooltip ">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corrupti voluptates molestias officia aut porro earum praesentium id quas quis reprehenderit.</p>
                    </div>
                  <img src="asset/6.gif" class="card-img-top" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                  </div>
                </div>
              </div>
              </a>
          </td>
        </tr>
      </table>
        <a href="logout.php"><i class="fa fa-arrow-left ms-5 mt-3 karakter-kembali2"> Kembali</i></a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
    <!-- <script src="asset/js/script.js"></script>   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
      $(function(){
    height = $('#myTable tr').length+1;    
    width = $('#myTable td').length;
    $.each($('#myTable td'), function(key, value){
        $(this).attr('id', key);
    });
});
$(document).keydown(function(e)
{    
   switch(e.which) {        
        case 37: // left
           move(1);
        break;
        case 38: // up
      move(2);
        break;
        case 39: // right
           move(3);
        break;      
        case 40: // down
           move(4);
        break;      
        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
}); 
function move(direction){
    var cur_id = parseInt($('.selected').attr('id'));
  switch(direction){
        case 1://left
           selectTd(cur_id-1);
            break;
        case 2://up
            selectTd(cur_id-height);
            break;
        case 3://right
            selectTd(cur_id+1);
            break;
        case 4://down
             selectTd(cur_id+height);
            break;
         
    }
        
}
function selectTd(id){
    if(id > (width-1) || id < 0) return alert("Out of bounds");
   $('.selected').removeClass('selected');  
   $('#'+id).addClass('selected');     
}
    </script>
  </body>
</html>