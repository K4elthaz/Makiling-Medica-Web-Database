<?php

include("../connections.php");

//echo"<br>";
$retrieve_query = mysqli_query($connections, "SELECT * FROM tbl_user WHERE product_type='2' ");
while ($row_users = mysqli_fetch_assoc($retrieve_query)) {

  $id_user = $row_users["id"];

  $db_product_name = $row_users["product"];
  $db_price = $row_users["price"];
  $db_quantity = $row_users["quantity"];



  $jScript = md5(rand(1, 9));

  $newScript = md5(rand(1, 9));

  $getUpdate = md5(rand(1, 9));

  $getDelete = md5(rand(1, 9));


  echo "
   
    
    <table>
  <thead>
    <tr>
      
      <th>Product
      <th>Price
      <th>Quantity
      
      <th>
      
  </thead>
  <tbody>
  
    <tr>
    <td>$db_product_name</td>
    <td>$db_price</td>
    <td>$db_quantity</td>

    <td>
    
    <a href=' ?jScript=$jScript && newScript=$newScript && getUpdate=$getUpdate && id=$id_user ' class='btn-update' 'b' ><b> Update</b></a>
    &nbsp
    <a href=' ?jscript=$jScript && newScript=$newScript && getDelete=$getDelete && id=$id_user' class='btn-delete' ><b>Delete</b></a>
            

    <tr>
  </tbody>
</table>



   

    </tr>";
}




?>