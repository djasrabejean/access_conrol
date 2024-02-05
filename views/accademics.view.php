<?php require('../partials/head.php'); ?>

<link href="../css/style.css" rel="stylesheet">

<!-- Navigation required from nav.php file -->
<?php require('../partials/nav.php'); ?>



<!-- </header> -->
<!-- End Header -->

<!-- Sidebar -->

<!-- aside bar required from sidebar.php -->
<?php require('../partials/sidebar.php'); ?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create User Account</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="views/index.view.php">Home</a></li>
        <li class="breadcrumb-item active">Create User Account</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <!-- <div class="row"> -->
        <div class="row">
          <!-- Campus Card -->
          <div class="col-xxl-12 col-xl-12">
            <div class="card info-card sales-card">

            <form class="w-100 " id="register-form" action="javascript:void(0)" novalidate>
                    <div class=" form-group col-md-6">
                      <label for="fullName" class="form-label">Staff Name</label>
                      <input type="text" name="full_name" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="form-group col-md-6">
                       <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please choose a username.</div>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="mobileNumber" class="form-label">Phone Number</label>
                      <input type="mobile" name="mobile" class="form-control" id="mobileNumber" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="role" class="form-label">Staff Role</label>
                      <div class="input-group has-validation">
                      <select id="security" class="form-control" name="security_level" required >
                          <option value="">Security Level</option>
                          <option>Admin</option>
                          <option>Manager</option>
                          <option>Staff</option>
                      </select>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="form-group col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                  </form> 
            </div>

          </div>
          </div>
          </div>
          </div>

</section>

</main>

<!-- footer required from footer.php file -->
<?php require('../partials/footer.php'); ?>