<?php
  session_start();
  require_once("aplikasi.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <div class="row" style="background-color: yellow">
        <div class="col">HEADER
        
    <div class="row">
      <div class="col-4" style="background-color: pink">SIDEBAR
        <ul><a href="index.php?page=login_form">Login </a></ul>
        
        <?php if(isset($_SESSION['username'])){
          ?>
            <ul>
              <?php
                $menu = get_menu_by_level2($_SESSION['level']);
                
                while($row = mysqli_fetch_assoc($menu))
                {
                  echo '<li><a href="index.php?page='.$row['page'].'">'.$row['nama_menu'].'
                  </a></li>';

                
              }
              ?>
              <a href="index.php?page=logout">Logout </a>
            </ul>
            <?php
          }
        ?>
      </div>
        <div class="col-8" style="background-color: lightblue;min-height: 100px">CONTENT
          <?php
            define("INDEX",true);
            if (isset($_GET['page']))
            {
              $page=$_GET['page'];
            }
            else
            {
              $page="dashboard";
            }
            
            // batasi untuk yang sudah login
            $exception_page = ['login_form','login_process'];

            if (in_array($page, $exception_page) == false) {
              //cek session
              if ($_SESSION['username']=="") {
                echo "<script> 
                  window.location='index.php?page=login_form';
                </script>";
                exit;
              }
            }
            //periksa apakah punya kewenangan
            require_once($page.".php");
          ?>
          
        </div>
        
    </div>
    <div class="row" style="background-color: gray">FOOTER
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>