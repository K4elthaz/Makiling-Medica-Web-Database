<?php

$id_user = $_GET["id"];
$order = "";
$get_record = mysqli_query($connections, "SELECT * FROM tbl_user WHERE id='$id_user'");


while ($get = mysqli_fetch_assoc($get_record)) {

    $db_product_name = $get["product"];
    $db_price = $get["price"];
    $db_quantity = $get["quantity"];
}


$new_quantity = $order_quantity = "";
$order_quantityErr = "";


if (isset($_POST["btnUpdate"])) {

    if (empty($_POST["order_quantity"])) {

        $order_quantityErr = "Enter Quantity";
    } else {
        $order_quantity = $_POST["order_quantity"];
        if ((int)$order_quantity >= (int)$db_quantity) {

            $order_quantityErr = "Not Enough Quantity";
        } else {


            $db_quantity = (int)$db_quantity - (int)$order_quantity;
            $new_quantity = $db_quantity;
            //$new_quantity = $_POST["order_quantity"];

        }
        //$quantityerr = "Required!";
    }


    if ($new_quantity) {
        mysqli_query($connections, "UPDATE tbl_user SET
        quantity = '$db_quantity' WHERE id = '$id_user'
        ");
        $encrypted = md5(rand(1, 9));

        echo "<script>window.location.href='viewOrder?$encrypted&&notify=Successfully Bought!';</script>";
    }
}

?>

<style>
.error {
    color: red;
}
</style>


<div class="login-box">
    <h2>Cart</h2>
    <form method="POST">
        <div class="user-box">
            <?php echo "<b><h2><p style='color:white'>$db_product_name</b></h2></p>";
            ?>
            <label><?php $db_product_name
                    ?></label>
        </div>

        <div class="user-box">
            <?php echo "<b><h2><p style='color:white'>₱$db_price</b></h2></p><br><hr>";
            ?>

            <label><?php $db_price
                    ?> </label>
        </div>

        <div class="user-box">
            <input type="text" name="order_quantity" value="" placeholder="Quantity">
            <span class="error"><?php echo $order_quantityErr; ?></span>

        </div>





        <a href="#">

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" name="btnUpdate" value="Buy" class="button">
        </a>
    </form>
</div>