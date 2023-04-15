<?php
include_once 'header.php';
?>



    <!--Sign in Modal-->

    <div class="container d-felx">
      <div class="card mx-auto mt-5" id="login_card">
      <div class="card-body">

        <h3 class="card-title text-center mb-3 ">Create an account</h3>  
                <form method="post" action="user_profile_query.php">
                 
                <div class="form-outline mb-4">
                    <label for="name">Name:</label>
                    <input  class="form-control" required id="reginame" name="reginame">
                  </div>
                    <div class="form-outline mb-4">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" required id="regiemail"  name="regiemail">
                      <?php
                  if (isset($_GET['error']))
                  echo "<h5>Error: " . $_GET['error'] . "</h5>"; ?>
                    </div>
                    <div class="form-outline mb-4">
                      <label for="pwd">Password:</label>
                      <input type="password" class="form-control" required id="regipwd" name="regipassword">
                      <span>*The length should be 5-10 characters long and please use only letters and numbers*</span>
                    </div>
                    <div class="form-outline mb-4">
                    <label for="phn">Phone Number:</label>
                    <input  type="number" class="form-control" required id="regiphn" name="regiphonenumber">
                    </div>
                    <div class="d-flex justify-content-center">
                    <button onclick="return validateForm()" type="submit" class="btn btn-outline-primary" name="registration" >Sign Up</button>
                  </div>
                  </form>
      </div>
    </div>
    </div>

<?php
include_once 'footer.php';
?>
<script src="regiValidate.js"></script>