<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['demo-name'];
  $email = $_POST['demo-email'];
  $category = $_POST['demo-category'];
  $priority = $_POST['demo-priority'];
  $updates = isset($_POST['demo-copy']) ? 'Yes' : 'No';
  $message = $_POST['demo-message'];

  // TODO: Process the form data, such as sending an email or storing the message in a database

  // Redirect the user to a thank you page
  header('Location: thank-you.php');
  exit();
}
?>
