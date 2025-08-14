<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include "./inc/db_close.php";
?>

<?php include_once './parts/header.php' ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary">
  <div class="col-md-6 p-lg-5 mx-auto my-5">
    <h1 class="display-3 fw-bold">Welcome to the Amazing Web Project!</h1>
    <h3 class="fw-normal text-muted mb-3">Discover new opportunities, connect with others, and enjoy exclusive
      rewards.</h3>
  </div>
</div>


<!-- <ul class="list-group list-group-flush">
  <li class="list-group-item">Welcome to our user list!</li>
  <li class="list-group-item">Browse registered users below.</li>
  <li class="list-group-item">Add your details using the form.</li>
  <li class="list-group-item">Stay connected and enjoy the site.</li>
  <li class="list-group-item">Thank you for visiting!</li>
</ul> -->
<div class="position-relative text-center">
  <div class="col-md-6 p-lg-5 mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
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
<div class="row mb-5 pb-5">
  <?php foreach ($users as $user) : ?>
    <div class="col-sm-6">
      <div class="card my-1 bg-light">
        <div class="card-body">
          <h5 class="card-title">
            <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h5>
          <p class="card-text"><?php echo htmlspecialchars($user['email']) ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>
<?php include_once './parts/footer.php' ?>