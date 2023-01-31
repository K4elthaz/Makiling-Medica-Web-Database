<?php
include("connections.php");
include("cssLogin.php");


if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];

    $query_account_type = mysqli_query($connections, "SELECT * FROM tbl_user WHERE email='$email'");

    $get_acount_tpye = mysqli_fetch_assoc($query_account_type);

    $account_type = $get_acount_tpye["account_type"];

    if ($account_type == 1) {
        echo "<script>window.location.href='Admin';</script>";
    } else {
        echo "<script>window.location.href='User';</script>";
    }
}






$email = $password = "";
$emailErr = $passwordErr = "";


if (isset($_POST["btnLogin"])) {

    if (empty($_POST["email"])) {
        $emailErr = "Email is Required!";
    } else {
        $email = $_POST["email"];
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is Required!";
    } else {
        $password = $_POST["password"];
    }

    if ($email and $password) {
        $check_email = mysqli_query($connections, "SELECT * FROM tbl_user WHERE email='$email'");
        $check_row = mysqli_num_rows($check_email);

        if ($check_row > 0) {
            $fetch = mysqli_fetch_assoc($check_email);

            $db_password = $fetch["password"];

            $account_type = $fetch["account_type"];

            if ($account_type == "1") {

                if ($db_password == $password) {

                    $_SESSION["email"] = $email;

                    echo "<script>window.location.href='Admin';</script>";
                } else {
                    $passwordErr = "Hi Admin, Your Password is Incorrect!!";
                }
            } else {
                if ($db_password == $password) {

                    $_SESSION["email"] = $email;

                    mysqli_query($connections, "UPDATE tbl_user WHERE email='$email'");
                    echo "<script>window.location.href='User';</script>";
                } else {
                    mysqli_query($connections, "UPDATE tbl_user WHERE email='$email'");
                    $passwordErr = "Password is incorrect! ";
                }
            }
        } else {
            $emailErr = "Email is not Registered!";
        }
    }
}

?>

<style>
.error {
    color: red;
}
</style>

<center>

    <form method="POST">
        <div class="container" onclick="onclick">
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="center">

                <h2>Hi Makiling Medica</h2>

                <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr; ?></span>

                <input type="password" name="password" placeholder="Password" value="">
                <span class="error"><?php echo $passwordErr; ?></span>
                <Br>

                <input class="btn-primary" type="submit" name="btnLogin" value="Login">
                <br>

                <a href="?forgot=<?php echo md5(rand(1, 9)); ?>"><b>Forgot Password? </b></a>

    </form>
</center>