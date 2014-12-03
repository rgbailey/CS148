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
        <link rel="stylesheet" href="css/index.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
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
        
        <div class="main-index">
<img src="https://rgbailey.w3.uvm.edu/cs148/assignment10/img/banner.png" alt="main" usemap="#Map" />
<map name="Map" id="Map">
    <area alt="map" title="map" href="https://rgbailey.w3.uvm.edu/cs148/assignment10/info.php" shape="poly" coords="1267,418,962,416,960,504,1263,503" />
</map> 
        <article class="fluid infoTime">
            <h2>Facts</h2>
      <section class="fluid first"><p>Mentoring is often one component of a program that involves other elements, such as tutoring or life skills training and coaching. The supportive, healthy relationships formed between mentors and mentees are both immediate and long-term and contribute to a host of benefits for mentors and mentees.</p></section>
    <section class="fluid second"><p>Mentoring can help youth as they
            go through challenging life transitions, including deal
            ing with stressful changes at home or transitioning t
            o adulthood. Close, healthy, supportive relationships 
            between mentors and mentees that last for a significant
            portion of time (i.e., more than one year) are central
            to success. Without this, mentoring programs run the risk 
            of harming young people who are paired with mentors ill-equipped 
            to meet the mentees' needs. Specifically, relationships with mentors 
            that last less than three months; where there is irregular and 
            inconsistent contact; where there is a disconnect between the personalities, interests, and expectations of the mentors and mentees; where mentors are unprepared and lack skills to relate to youth; and where there is no emotional bond between the mentor and mentee have been found to be harmful to youth (Jekielek et al., 2002; Rhodes & DuBois, 2006).</p></section></article>
        </div>
        <footer id="footer" class="fluid">
    <hr><p class="fluid foot">This site was designed by Romario G. Bailey<br> © 2014 RGBailey. All rights reserved.</p><br>
    </footer>
        </body>
</html>
