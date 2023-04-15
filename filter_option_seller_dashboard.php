<form action="filter_result.php" method="POST"class="container mt-5 filtering">

<div class="row row-col-1 row-col-md-3 mb-3">
<div class="col">
    <div class="category_Select">
<p>Category: </p>
<select class="form-select ms-3 mb-3" name="category" aria-label="Default select example">
  <option value="All">All</option>
    <option value="Electronics">Electronics</option>
    <option value="Clothes">Clothes</option>
    <option value="Cars">Cars</option>
    <option value="furniture">Furnitures</option>
    <option value="Books">Books</option>

    <option value="Toys">Toys</option>
    <option value="Musical Instruments">Musical Instruments</option> 
</select></div>
</div>

<div class="col">
<div class="price_range mb-3">
<p>Price: </p>
<div class="d-flex ms-3">
  <input type="number" class="form-control me-3" placeholder="Min"  name="price_min" aria-label="price_min" min="1">
  <div class="seperator">-</div>
  <input type="number" class="form-control ms-3" placeholder="Max"  name="price_max" aria-label="price_max" min="1">
</div>
</div>
</div>

<div class="col filter_button">
      <button class="btn btn-outline-primary ms-3" type="submit" name="filter_dashboard">Filter</button>
     </div>       
      </div></form> 