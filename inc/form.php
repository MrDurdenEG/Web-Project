<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

if (isset($_POST['submit'])) {
  //echo $firstName . ' / ' . $lastName . ' / ' . $email;
  $sql = "INSERT INTO users(firstName,lastName,email)
          VALUES('$firstName','$lastName','$email')";

  if (empty($firstName)) {
    echo 'first name is empty';
  } elseif (empty($lastName)) {
    echo 'last name is empty';
  } elseif (empty($email)) {
    echo 'email is empty';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'enter valid email';
  } else {
    if (mysqli_query($conn, $sql)) {
      header('location : index.php');
    } else {
      echo 'fail';
    }
  }
}
