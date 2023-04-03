<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // TODO: Process the data as required (e.g., send an email, store in a database, etc.)

  // Display a success message
  echo "Thank you for contacting us, $name. We'll get back to you soon!";
}
?>
