<?php
$id_user = $_GET["id"];

$get_record = mysqli_query($connections, "SELECT * FROM tbl_user WHERE id='$id_user'");


while ($get = mysqli_fetch_assoc($get_record)) {

    $db_product_name = $get["product"];
    $db_price = $get["price"];
    $db_quantity = $get["quantity"];
}

$new_product_name = $new_price = $new_quantity = "";
$new_product_nameErr = $new_priceErr = $new_quantityErr = "";

if (isset($_POST["btnUpdate"])) {
    if (empty($_POST["new_product_name"])) {
        $new_product_nameErr = "This field is empty!";
    } else {
        $new_product_name = $_POST["new_product_name"];
        $db_product_name = $new_product_name;
    }

    if (empty($_POST["new_price"])) {
        $new_priceErr = "This field is empty!";
    } else {
        $new_price = $_POST["new_price"];
        $db_price = $new_price;
    }

    if (empty($_POST["new_quantity"])) {
        $new_quantityErr = "This field is empty!";
    } else {
        $new_quantity = $_POST["new_quantity"];
        $db_quantity = $new_quantity;
    }


    if ($new_product_name && $new_price && $new_quantity) {
        mysqli_query($connections, "UPDATE tbl_user SET
        product = '$db_product_name',
        price = '$db_price',
        quantity = '$db_quantity' WHERE id = '$id_user'
        ");

        $encrypted = md5(rand(1, 9));

        echo "<script>window.location.href='view_product?$encrypted&&notify=Record Has Been Updated!';</script>";
    }
}




?>


<style>
.error {
    color: red;
}
</style>


<script type="application/javascript">
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>





<div class="login-box">
    <h2>Edit Product</h2>
    <form method="POST">
        <div class="user-box">
            <input type="text" name="new_product_name" value="<?php echo $db_product_name; ?>">
            <span class="error"><?php echo $new_product_nameErr; ?></span>
            <label><?php $db_product_name ?></label>
        </div>

        <div class="user-box">
            <input type="text" name="new_price" value="<?php echo $db_price; ?>">
            <span class="error"><?php echo $new_priceErr; ?></span>
            <label><?php $db_price ?> </label>
        </div>

        <div class="user-box">
            <input type="text" name="new_quantity" value="<?php echo $db_quantity; ?>">
            <span class="error"><?php echo $new_quantityErr; ?></span>
            <label><?php $db_quantity ?> </label>
        </div>




        <a href="#">

            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" name="btnUpdate" value="Update" class="button">
        </a>
    </form>
</div>