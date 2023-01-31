<?php



$id_user = $_GET["id"];


$query_name = mysqli_query($connections, "SELECT * FROM tbl_user WHERE id='$id_user'");

$row_ = mysqli_fetch_assoc($query_name);


$db_product_name = $row_["product"];
$db_price = $row_["price"];
$db_quantity = $row_["quantity"];


if (isset($_POST["btnDelete"])) {
    mysqli_query($connections, "DELETE FROM tbl_user WHERE id='$id_user'");
    echo "<script>window.location.href='view_product?notify=$db_product_name has been successfully deleted!';</script>";
}

?>
<br><br><br><br>
<center>
    <form method="POST">
        <h4> Are you sure you want to delete this product?: <font color="white"> <?php echo $db_product_name; ?> </font>
        </h4>
        <input type="submit" name="btnDelete" value="Confirm" class="btn-delete"> &nbsp; &nbsp; <a href="?"
            class="btn-delete"> Cancel</a>
    </form>
</center>