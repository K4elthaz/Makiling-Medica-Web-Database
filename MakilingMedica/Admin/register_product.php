<?php
include("../connections.php");
include("nav.php");

$product = $price = $quantity = "";
$producterr = $priceerr = $quantityerr = "";





if (isset($_POST["btnRegister"])) {

    if (empty($_POST["product"])) {
        $producterr = "Required!";
    } else {
        $product = $_POST["product"];
    }

    if (empty($_POST["price"])) {
        $priceerr = "Required!";
    } else {
        $price = $_POST["price"];
    }

    if (empty($_POST["quantity"])) {
        $quantityerr = "Required!";
    } else {
        $quantity = $_POST["quantity"];
    }

    if ($product && $price && $quantity) {

        $query = mysqli_query($connections, "INSERT INTO tbl_user (product,price,quantity,product_type)
        VALUES('$product','$price','$quantity','2')");
        echo "<script language='javascript'>alert('New record has been inserted!')</script>";
    } else {
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
    <h2>Register Product</h2>
    <form method="POST">

        <div class="user-box">
            <input type="text" name="product" value="" required=""> <span
                class="error"><?php echo $producterr; ?></span>
            <label>Product Name</label>
        </div>

        <div class="user-box">
            <input type="text" name="price" value="" required=""> <span class="error"><?php echo $priceerr; ?> </span>
            <label>Price</label>
        </div>

        <div class="user-box">
            <input type="text" name="quantity" value="" required=""> <span
                class="error"><?php echo $quantityerr; ?></span>
            <label>Quantity</label>
        </div>

        <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <input class="button" type="submit" name="btnRegister" value="Register">

        </a>

</div>
</form>