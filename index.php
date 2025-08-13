<?php
include './inc/db.php';
include './inc/form.php';

$sql_ = 'SELECT * FROM `users` ORDER BY `id` ASC';
$result = mysqli_query($conn, $sql_);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);



mysqli_free_result($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="container">

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
      <div class="col-md-6 p-lg-5 mx-auto my-5">
        <h1 class="display-3 fw-bold">Welcome to the Amazing Web Project!</h1>
        <h3 class="fw-normal text-muted mb-3">Discover new opportunities, connect with others, and enjoy exclusive
          rewards.</h3>
      </div>
    </div>


    <ul class="list-group list-group-flush">
      <li class="list-group-item">Welcome to our user list!</li>
      <li class="list-group-item">Browse registered users below.</li>
      <li class="list-group-item">Add your details using the form.</li>
      <li class="list-group-item">Stay connected and enjoy the site.</li>
      <li class="list-group-item">Thank you for visiting!</li>
    </ul>

    <form class="mt-5" action="index.php" method="POST">
      <h3>please enter your info</h3>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" name="firstName" class="form-control" id="exampleInputFN" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text error"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" name="lastName" class="form-control" id="exampleInputLN" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text error"></div>
      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text error"></div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php foreach ($users as $user) : ?>
      <h1>
        <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . ' ' . htmlspecialchars($user['email']) ?>
      </h1>;
    <?php endforeach ?>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>