<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
<head>

<?php include 'meta-links.php'; ?>

</head>
<body>

<?php include 'header.php'; ?>

<div class="checkoutbuttons">
    <div class="body">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <h2>log in</h2>
                <form method="POST" action="accounts.php">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" name="login" value="log in">
                </form>
            </div>
            <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                <h2>create an account</h2>
                <form method="POST" action="accounts.php">
                    <input type="text" name="username" placeholder="username">
                    <input type="text" name="email" placeholder="email">
                    <input type="password" name="password" placeholder="password">
                    <input type="text" name="firstname" placeholder="first name">
                    <input type="text" name="lastname" placeholder="last name">
                    <input type="text" name="address_1" placeholder="address 1">
                    <input type="text" name="address_2" placeholder="address 2">
                    <input type="text" name="city" placeholder="city">
                    <input type="text" name="state" placeholder="state">
                    <input type="text" name="zip" placeholder="zip">
                    <input type="submit" name="createaccount" value="create account">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>