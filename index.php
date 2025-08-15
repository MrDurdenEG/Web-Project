<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include "./inc/db_close.php";
?>

<?php include_once './parts/header.php' ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
  <div class="col-md-6 p-lg-5 mx-auto ">
    <img src="./images/image.png" alt="">
    <h1 class="display-3 fw-bold">Welcome to the Amazing Web Project!</h1>
    <h3 class="fw-normal text-muted mb-3">Register with us to receive a free version of the program </h3>
    <h4 class="fw-normal text-muted mb-3">Time remaining</h4>
    <h3 id="count-down"></h3>

  </div>
  <div class="container">
    <ul class="list-group list-group-flush">
      <li class="list-group-item">Welcome to our user site!</li>
      <li class="list-group-item">Add your details using the form for a chance to win.</li>
      <li class="list-group-item">Stay connected and see who will be chosen as the winner!</li>
    </ul>
  </div>
</div>



<div class="container">
  <div class="position-relative text-center">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h3>please enter your info</h3>
        <div class="mb-3">
          <label for="exampleInputFN" class="form-label">First Name</label>
          <input type="text" name="firstName" class="form-control" id="exampleInputFN" value="<?php echo $firstName ?>">
          <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputLN" class="form-label">Last Name</label>
          <input type="text" name="lastName" class="form-control" id="exampleInputLN" value="<?php echo $lastName ?>">
          <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" id="exampleInputEmail" value="<?php echo $email ?>">
          <div class="form-text error"><?php echo $errors['emailError'] ?></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <div class="loader-con">
    <div id="loader">
      <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
  </div>

  <div class="d-grid gap-2 mb-5 col-6 mx-auto">
    <button id="winner" type="button" class="btn btn-primary">
      Choose the winner
    </button>
  </div>
  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">

          <h5 class="modal-title" id="modalLabel">
            THE WINNER</h5>

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <?php foreach ($users as $user) : ?>
          <div class="modal-body">
            <h1 class="display-1 text-center model-title" id="modalLabel">
              <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h1>
          <?php endforeach ?>
          </div>
      </div>
    </div>
  </div>

  <?php include_once './parts/footer.php' ?>