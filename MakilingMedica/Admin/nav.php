<?php
include("../connections.php");

include("cssMenu.php");
include("updatecss.php");
include("cssNav.php");
?>


<input type="checkbox" id="burger-toggle">

<label for="burger-toggle" class="burger-menu">

    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</label>
<div class="menu">
    <div class="menu-inner">
        <ul class="menu-nav">
            <li class="menu-nav-item"><a class="menu-nav-link" href="register_product"><span>
                        <div>Register Product</div>
                    </span></a></li>
            <li class="menu-nav-item"><a class="menu-nav-link" href="view_product"><span>
                        <div>View Product</div>
                    </span></a></li>
            <!--<li class="menu-nav-item"><a class="menu-nav-link" href="view_gross"><span>
                        <div>View Gross</div>
                    </span></a></li>-->
            <li class="menu-nav-item"><a class="menu-nav-link" href="viewOrder.php"><span>
                        <div>Order Product</div>
                    </span></a></li>
            <li class="menu-nav-item"><a class="menu-nav-link" href="../logout.php"><span>
                        <div>Logout</div>
                    </span></a></li>
        </ul>
    </div>
</div>

<!--<br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
<a href="register_product" class="btn-primary" > Register Product </a>
&nbsp;
&nbsp;

<a href="view_product" class="btn-primary">View Product </a>
&nbsp;
&nbsp;

<a href="view_gross" class="btn-primary" > View Sales </a>
&nbsp;
&nbsp;
<br>

<hr>
-->