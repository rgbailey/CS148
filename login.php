<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>The Northeast Group</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <div class="topbar">
            <div id="topbar-text-left"><a href="https://rgbailey.w3.uvm.edu/cs148/assignment10/index.php">The Northeast Group</a></div>
            <div id="topbar-text-right"><a href="https://rgbailey.w3.uvm.edu/cs148/assignment10/login.php">Log in</a></div>
            <div id="topbar-text-right"><a href="https://rgbailey.w3.uvm.edu/cs148/assignment10/register.php">Sign up</a></div>
        </div>
        <div class="forms">
        <form action="includes/process_login.php" method="post" name="login_form">                      
            Email:<br> <input type="text" name="email" /><br>
            Password:<br> <input type="password" 
                             name="password" 
                             id="password"/><br>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>
            </div>
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
    </body>
</html>
