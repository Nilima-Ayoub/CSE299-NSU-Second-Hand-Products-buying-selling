<?php
include_once 'header.php';
?>


    <!--Log in Modal-->

    <div class="container d-felx">
      <div class="card mx-auto mt-5" id="login_card">
      <div class="card-body">
      <img src="img/login_logo.png" class=" mb-1 " id="login_logo"> 

        <h3 class="card-title text-center mb-3 "> Log In</h3>  
                <form method="post" action="user_profile_query.php">
                <?php
                  if (isset($_GET['error']))
                  echo "<h3>Error: " . $_GET['error'] . "</h3>"; ?>
                    <div class="form-outline mb-4">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" required id="loginemail" name="loginemail">
                    </div>
                    <div class="form-outline mb-4">
                      <label for="pwd">Password:</label>



              <input type="password" class="form-control" required id="loginpwd" name="loginpwd">
                    </div>
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-outline-primary mb-3" name="login_submit" >Sign in</button>
                  </div>

                  <p class="text-center mb-3">Don't have an account?<a  href="registration.php" class="text-primary text-decoration-underline"> signup here</a></p>

            </div>
                  </form>
      </div>
    </div>
    

<?php
include_once 'footer.php';
?>
