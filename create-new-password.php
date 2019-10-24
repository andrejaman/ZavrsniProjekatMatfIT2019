<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

  <!-- CSS pocetna -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

<!-- CSS za polje prijave -->
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




  <title>ProjekatX</title>
<style>
#user, #pass{
  font-size: 20px;
}
#error{
  color:red;
  text-align: center;
  font-size: 20px;
}

</style>

</head>

<body>

  <div class="pozadina">
  </div>
<!-- NAVIGACIJA -->

<nav class="fixed-top">
  <div class="logo">
    <a href="index.php"><h4>PROJEKAT X</h4></a>
  </div>

    <ul class="nav-links">
      <li>
        <a href="index.php">
          <i class="fa fa-home" aria-hidden="true"></i>
          <p>Početna</p></a>
      </li>
      <li>
        <a href="onama.php">
          <i class="fa fa-users" aria-hidden="true"></i><p>O nama</p></a>
      </li>
      <li>
        <a href="prijavikvar.php">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i><p>Prijavi kvar</p></a>
      </li>
      <li class="pocetna">
        <a href="login.php">
          <i class="fa fa-sign-in" aria-hidden="true"></i><p>Prijavi se</p></a>
      </li>
      <li>
        <a href="signup.php">
          <i class="fa fa-user-plus" aria-hidden="true"></i><p>Registruj se</p></a>
      </li>
    </ul>
    <div class="burger">
      <div class="line1">

      </div>
      <div class="line2">

      </div>
      <div class="line3">

      </div>
    </div>
  </nav>
<!-- END of nav -->

<!-- Form for login -->

  <form class="form-box">
    <div class="input-box">

    <?php
      $selector = $_GET["selector"];
      $validator = $_GET["validator"];

      if (empty($selector) || empty($validator)) {
        echo "Zahtev nije validan!";
      } else {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
          ?>

          <form action="includes/reset-password.inc.php" method="post">
            <input type="hidden" name="selector" value="<?php echo $selector ?>">
            <input type="hidden" name="validator" value="<?php echo $validator ?>">
            <input type="password" name="pwd" placeholder="Unesite novu lozinku...">
            <input type="password" name="pwd-repeat" placeholder="Ponovite novu lozinku...">
            <button type="submit" name="reset-password-submit">PROMENI LOZINKU</button>
          </form>

          <?php

        }
      }


     ?>
     </div>
  </form>







  <!-- Footer -->
  <div class="footer">
    <p>Dizajn: ProjectX company 2019.</p>
  </div>
  <!--END of Footer-->


  <script src="script.js"></script>

</body>

</html>
