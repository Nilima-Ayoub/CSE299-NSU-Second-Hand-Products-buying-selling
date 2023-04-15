<?php
include_once 'header.php';
?>

<?php
// a paeticular user's post
if (isset($_POST['filter_dashboard'])) {
    $category = $_POST['category'];
    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max'];
    $id = $_SESSION['id']; ?>

<?php // category based only, no price selected
if ($category == 'All' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where  user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'Electronics' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category' and user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'Clothes' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category ' and user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'Cars' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category 'and user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'Toys' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category 'and user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'Musical Instruments' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category 'and user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'furniture' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category 'and user_id='$id'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';
} elseif ($category == 'Books' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category 'and user_id='$id' ";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view_seller_post.php';

// category and price
}
    // category and price
    elseif ($category == 'All' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where price >=$price_min and price <=$price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'Electronics' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category' and price >= $price_min and price <= $price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'Clothes' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category' and price >=$price_min and price <= $price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'Cars' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'Toys' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'Musical Instruments' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'furniture' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } elseif ($category == 'Books' && isset($price_min) && isset($price_max)) {
        $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max  and user_id='$id'";
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
        $item = mysqli_query($mysqli_connection, $sql2);
        include_once 'item_sort_product_view_seller_post.php';
    } else {
    }
}
// all user's post
if (isset($_POST['filter'])) {
    $category = $_POST['category'];
    $price_min = $_POST['price_min'];
    $price_max = $_POST['price_max']; ?>


<?php // category based only, no price selected
if ($category == 'All' && empty($price_min) && empty($price_max)) {
    include_once 'product_view.php';
} elseif ($category == 'Electronics' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category'";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Clothes' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category '";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Cars' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category '";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Toys' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category '";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Musical Instruments' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category '";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'furniture' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category '";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Books' && empty($price_min) && empty($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category '";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';

// category and price
} elseif ($category == 'All' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where price >=$price_min and price <=$price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Electronics' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category' and price >= $price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Clothes' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category' and price >=$price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Cars' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Toys' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Musical Instruments' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'furniture' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} elseif ($category == 'Books' && isset($price_min) && isset($price_max)) {
    $sql2 = "SELECT *FROM item  where category='$category ' and price >= $price_min and price <= $price_max";
    $item = mysqli_query($mysqli_connection, $sql2);
    include_once 'item_sort_product_view.php';
} else {
}
} else {
}
?>


