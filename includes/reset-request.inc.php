<?php

if (isset($_POST["reset-request-submit"])){

  $selector = bin2hex(random_bytes(8));
  $token = random_bytes(32);

  $url = "http://localhost/projekat%20x/create-new-password.php?selector=$selector&validator=bin2hex($token)";

  $expires = date("U") + 1800;

  require 'dbh.inc.php';

  $userEmail = $_POST["email"];

  $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);
  }

  $sql = "INSERT INTO pwdReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES ( ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "There was an error!";
    exit();
  } else {
    $hashedToken = password_hash($token, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
    mysqli_stmt_execute($stmt);
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

  $to = $userEmail;

  $subject = 'Promenite lozinku za ProjectX...';

  $message = '<p>Primili smo zahtev za promenu lozinke. Link za promenu lozinke je ispod. Ako niste Vi poslali ovaj zahtev, ignorisite ovaj e-mail</p>';
  $message .='<p>Ovo je link za promenu lozinke: <br />';
  $message .='<a href="' . $url . '">' . $url .'</a></p>';

  $headers = "From: ProjectX <matfprojectx@gmail.com>\r\n";
  $headers .= "Reply-To: matfprojectx@gmail.com\r\n";
  $headers .= "Content-type: text/html\r\n";

  mail($to, $subject, $message, $headers);

  header("Location: ../reset-password.php?reset=success");

} else {
  header("Location: ../index.php");
}
