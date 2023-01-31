<?php
session_start();

include("../connections.php");
include("nav.php");
?>

<script type="text/javascript" src="js/jQuery.js"></script>

<script type="application/javascript">
setInterval(function() {
    $(' #orderRetriever ').load('orderRetriever.php');
}, 1000);
</script>




<?php
if (empty($_GET["getBuy"])) {
?>

<div id="orderRetriever">
    <?php include("orderRetriever.php"); ?>
</div>
<?php
} else {
    include("getOrder.php");
}
if (empty($_GET["notify"])) {
} else {
    echo "<font color= green><h3><center>" . $_GET["notify"] . "</center></h3></font>";
}
?>