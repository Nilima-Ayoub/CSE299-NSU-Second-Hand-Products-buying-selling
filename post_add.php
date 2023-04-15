<!--profile edit Modal-->

<div class="modal fade" id="post_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
    <div class="modal-content" >
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Post</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
<div class="form-outline mb-4 " >
<form method="post" action="payment.php">
<label for="titlename">Title: </label>
<input class="form-control" required id="titlename" name="titlename" placeholder="Keep it short!">
</div>
<div class="form-outline mb-4">
<div class="col">
  <label for="description">Description</label>
  <textarea class="form-control" rows="1" required id="description" name="description"></textarea>
</div>
</div>

<div class="form-outline mb-4">
<div class="row">
<div class="col">
  <label for="Category">Category:</label>
  <select class="category form-control" required id="category" name="category">
    <option>Books</option>
    <option>electronics</option>
    <option>Toys</option>
    <option>furniture</option>
    <option>Musical instruments</option>
    <option>Cloths</option>
</select>
</div>
<div class="col">
<label for="sub-category">Sub Category</label>
<input class="form-control " required id="sub-category" name="sub-category" placeholder="Specify the exact category!">
</div>
</div>
</div>

<div class="form-outline mb-4">
<div class="row">
  <div class="col">
<label for="price">Price (TK):</label>
<input  type="number" class="form-control" required id="price" name="price" min="1">
</div>
<div class="col">
<label for="duration">Duration of use</label>
<input  type="text" class="form-control" required id="duration_of_use" name="duration_of_use">
</div>
</div></div>

<div class="form-outline mb-4">Upload images of sides , upper and lower parts of your goods</div>
<div class="form-outline mb-4 ">

    <div class="row">
    <div class="col">
<input required type="file"  accept="image/*" name="img1" value="#" id="img1">
</div>
<div class="col">
<input required type="file"  accept="image/*" name="img2" value="#" id="img2">
</div>

</div>
</div>
<div class="form-outline mb-4"><h4>Contact information</h4></div>
<div class="form-outline mb-4">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" required id="name" name="name">
                    </div>
                    <div class="form-outline mb-4">

                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" required id="email"  name="email">
                    </div>
                    
                    <div class="form-outline mb-4">
                    <label for="phn">Phone Number:</label>
                    <input  type="number" class="form-control" required id="phn" name="phonenumber">
                    </div>


<div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-light pay" name="submit"  >Proceed</a></button></div>
                  </form>

      </div>
    </div>
  </div>
</div> 