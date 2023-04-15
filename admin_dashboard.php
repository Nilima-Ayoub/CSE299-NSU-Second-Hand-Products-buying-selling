<?php
include_once 'header.php';
if (isset($_SESSION['username']) && $_SESSION['role'] == 'admin') {
?>

   <!--navbar-->
   <div class="container ms-0 mt-4">

<div class="row">
<div class="col-1">
            <?php  include_once 'side_navbar.php'; ?>  
</div>

<div class="col ms-4 mt-3">
<div class="d-flex flex-column">
<div class="row">
<div class="justify-content-center">
<div class="form-floating mb-3 row-col-1">
             <input type="text" class="form-control" id="admin_search" placeholder="admin_search">
<label for="admin_search">Search</label>
</div>
</div></div>


<div class="row" id="admin_search_result">
<?php
  $query = mysqli_query(
    $mysqli_connection,
    "SELECT * FROM user_info where role!='admin'");
  $rowcount = mysqli_num_rows($query);
  if ($rowcount > 0) {
    include_once "manage_user_table.php";
  }
?>
</div>
</div>
</div></div></div>

<!--Add new admin modal-->
<div class="modal fade" id="new_admin_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel">New Admin Details</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form method="post" action="user_profile_query.php">
      <div class="form-outline mb-4">
        <label for="name">Name:</label>
        <input  class="form-control" required id="admin_reginame" name="reginame">
      </div>
        <div class="form-outline mb-4">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" required id="admin_regiemail"  name="regiemail">
        </div>
        <div class="form-outline mb-4">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" required id="admin_regipwd" name="regipassword">
        </div>
        <div class="form-outline mb-4">
        <label for="phn">Phone Number:</label>
        <input  type="number" class="form-control" required id="admin_regiphn" name="regiphonenumber">
        </div>
        <div class="d-flex justify-content-center">
        <button onclick="return validateForm()" type="submit" class="btn btn-success" name="registration" >Submit</button>
      </div>
      </form>
</div>
</div>
</div>
</div> 

<?php  include_once 'footer.php';
}
else {
  echo '<script type="text/javascript"> window.location="main.php";</script>';
}?><script src="check_delete.js"></script>

<script type="text/javascript" defer>
  $(document).ready(function(){
    $('#admin_search').keyup(function(){
var input = $(this).val();
if(input!=""){
  $.ajax({
    url:"admin_search_result.php",
    method:"POST",
    data:{input:input},
    success:function(data){
      $("#admin_search_result").html(data);
    }
  });
}
});
  });
</script>