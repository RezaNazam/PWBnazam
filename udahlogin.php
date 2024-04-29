<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WELCOMEE!!</title>
  </head>

  <!-- Pake CSS Inline -->
  <body style="background-color: violet; text-align: center; font-family: Poppins, sans-serif; margin: 10rem">
    <center>
      <!-- <h1 style="color: #333; font-size: 5rem"><i>SELAMAT DATANG!  </i></h1>
      <h3 style="color: #666; font-size: 2rem">Terimakasih telah bergabung dengan website kami. Media belajar bersama!</h3> -->

      <h1>HAI!! <?php echo $_GET["fname"]; ?> <?php echo $_GET["lname"]; ?> 
      <br>
      Your gender is :  <?php echo $_GET["Gender"]; ?> 
      <br>
      Your Nationality : <?php echo $_GET["Nationality"]; ?>
      <br>
      Language Spoken : <?php
        if(isset($_GET['bahasa'])) {
            $languages = $_GET['bahasa'];
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
        }
        ?>
      Your Bio : <?php echo $_GET["message"]; ?></h1>
    </center>
  </body>
</html>
