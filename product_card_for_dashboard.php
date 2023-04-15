<div class="card">
    <img src="img/<?php echo $row['img1']; ?>" class="card-img-top img_size" alt="..." loading="lazy" >
                    <div class="card-body">
                        <p class="card-text">category: <?php echo $row['category']; ?></p>
                        <p class="card-text">Price: <?php echo $row['price']; ?>Tk</p>

                        <?php if (isset($_SESSION['username']) && ($_SESSION['role'] == 'user')) {?>
                            <a href="dashboard_product_details.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-secondary text-black"> View and edit</a>
                        <?php } else if (isset($_SESSION['username']) && ($_SESSION['role'] == 'admin')) {?>
                            <a href="dashboard_product_details.php?id=<?php echo $row['id'];?>" class="btn btn-outline-secondary text-black">View</a>
                          <?php }                   
                           else {
                }
                          ?>
                    </div>
                </div>