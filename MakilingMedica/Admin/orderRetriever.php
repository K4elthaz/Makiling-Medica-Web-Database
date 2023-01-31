<script type="text/javascript" src="js/jQuery.js"></script>

<script type="application/javascript">
setInterval(function() {
    $(' #retriever ').load('retriever.php');
}, 1000);
</script>

<?php
include("../connections.php");





/*<td>$db_price</td>
    <td>$db_quantity</td>

    <td>*/


?>

<div class='login-box'>
    <h2> Order Product </h2>


    <?php
    $retrieve_query = mysqli_query($connections, "SELECT * FROM tbl_user WHERE product_type='2' ");
    while ($row_users = mysqli_fetch_assoc($retrieve_query)) {
        $id_user = $row_users["id"];

        $db_product_name = $row_users["product"];
        $db_price = $row_users["price"];
        $db_quantity = $row_users["quantity"];

        $jScript = md5(rand(1, 9));

        $newScript = md5(rand(1, 9));

        $getBuy =  md5(rand(1, 9));

        echo
        "<table>
        <thead>
        <tr>
            <th> Product
            <th>Price
            <th>Quantity
            
            </thead>
        <tbody>
            <tr>
            <td>$db_product_name</td>
            <td>$db_price</td>
            <td>$db_quantity</td>
            
            <td>
            <a href=' ?jScript=$jScript && newScript=$newScript && getBuy=$getBuy && id=$id_user' class='button' > Buy</a>
            
            <tr>
            </tbody>
            </table>
            </tr>";
    }
    ?>
</div>









<!--<div class="login-box">
  <h2>Buy Product</h2>
  <form method = "POST">
    <div class="user-box">

    <input type="text" name="order_product_name" value="">
        <span class="error"><?php echo $order_product_nameErr; ?></span> 
        
    </div>

    <div class="user-box">

    </div>

    <div class="user-box">
    <input type="text" name="order_quantity" value=""> 
        <span class="error"><?php echo $order_quantityErr; ?></span> 
      
    </div>



    
    <a href="#">
         
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <input type="submit" name="btnUpdate" value="Order" class="button">
    </a>
  </form>
</div>-->