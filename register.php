<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Northeast Group</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="css/index.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register with us</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <div class="topbar">
            <div id="topbar-text-left"><a href="https://rgbailey.w3.uvm.edu/cs148/assignment10/index.php">The Northeast Group</a></div>
            <div id="topbar-text-right"><a href="https://rgbailey.w3.uvm.edu/cs148/assignment10/login.php">Log in</a></div>
            <div id="topbar-text-right"><a href="https://rgbailey.w3.uvm.edu/cs148/assignment10/register.php">Sign up</a></div>
        </div>
        <div class="forms">
        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            First name:<br> <input type='text' name='firstname' id='firstname'/><br>
            Last name:<br> <input type='text' name='lastname' id='lastname'/><br>
            Username:<br> <input type='text' 
                name='username' 
                id='username' /><br>
            Email:<br> <input type="text" name="email" id="email" /><br>
            Password:<br> <input type="password"
                             name="password" 
                             id="password"/><br>
            Confirm password:<br> <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br><br>
            Gender:<br>
	<label><input type="radio" id="male" name="Gender" value="Male"  
			 checked="checked" >Male</label>
	<label><input type="radio" id="female" name="Gender" value="Female"  
			>Female</label>
            <label><input type="radio" id="other" name="Gender" value="Other"  
			>Other</label>

	<legend>I want to be a </legend>
	<select type="list" id="list" name="list" size="1">
		<option value="mentor"  selected="selected" >Mentor</option>
		<option value="mentee" >Mentee</option>
	</select>


            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" > 
        </form>
            </div>
        <p>Return to the <a href="index.php">home page</a>.</p>
    </body>
</html>
