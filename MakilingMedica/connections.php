<?php
$connections = mysqli_connect("localhost", "root", "", "medica");

if (mysqli_connect_errno()) {
    echo "failed to connect to MYSQL: " . mysqli_connect_error();
}
?>

<style>
.button {
    background-color: Transparent;
    background-repeat: no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
    color: #ffffff;
    font-size: 18px;
}

.btn-primary {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0px;
    font-family: Georgia;
    color: #ffffff;
    font-size: 24px;
    background: #34d9bd;
    padding: 4px 5px 4px 5px;
    text-decoration: none;
}

.btn-primary:hover {
    background: #4ccfb3;
    text-decoration: none;
}



.btn-register {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0px;
    font-family: Georgia;
    color: #E2B842;
    font-size: 15px;
    background: #012B39;
    padding: 5px 5px 5px 5px;
    text-decoration: none;
}

.btn-register:hover {
    background: #4ccfb3;
    text-decoration: none;
}

.btn-update {
    font-family: Georgia;
    color: #E2B842;
    font-size: 15px;
    background: #012B39;
    padding: 5px 5px 5px 5px;
    text-decoration: none;
}

.btn-update:hover {
    background: #ffffff;
    text-decoration: none;
}

.btn-delete {
    font-family: Georgia;
    color: #E2B842;
    font-size: 15px;
    background: #012B39;
    padding: 5px 5px 5px 5px;
    text-decoration: none;
}

.btn-delete:hover {
    background: #fc3c3c;
    text-decoration: none;
}
</style>