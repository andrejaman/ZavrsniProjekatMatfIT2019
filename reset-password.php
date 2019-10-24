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
#signup-success{
    color:yellow;
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

  <form class="form-box-forgot" action="includes/reset-request.inc.php" method="post">
    <h1>PROMENI LOZINKU</h1>
    <p>Da bi ste promenili lozinku unesite vašu e-mail adresu. <br />
      Dobićete e-mail sa daljim instrukcijama.</p>
    <div class="input-box">
      <i class="fa fa-envelope-o"></i>
      <input type="text" placeholder="Unesite Vašu E-mail adresu..." name="email">
    </div>
      <button type="submit" class="reset-request-btn" name="reset-request-submit">POŠALJI ZAHTEV</button>
      <?php
        if (isset($_GET["reset"])) {
          if($_GET["reset"] == "success") {
            echo '<p id="signup-success">Proverite Vaše e-mail sanduče.</p>';
          }
        }
         ?>
  </form>







  <!-- Footer -->
  <div class="footer">
    <p>Dizajn: ProjectX company 2019.</p>
  </div>
  <!--END of Footer-->


  <script src="script.js"></script>

</body>

</html>
