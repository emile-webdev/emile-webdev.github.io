<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "emile.webdev@hotmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have a message ".$name".\n\n".$message;

  mail($mailTo, $name, $txt, $headers);

  header("Location: index.html?MessageSent");
}

?>