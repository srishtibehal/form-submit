<?php

if(isset($_GET["submit-btn"])) {
    $err = NULL;
    $success = false;
    if ($_GET["fullname"]) {
        $fn = $_GET["fullname"];
    } else{
        $err = "Your Name?";
    }

    if(isset($_GET["email"])) {
        if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
            $em = $_GET["email"];
        } else {
            $err = "Invalid Email!";
        }
        
    } else {
        $err .= "Email?";
    }
    
    if(isset($GET["message"])) {
        $m = $_GET["message"];
    } else{
        $err .= "Message?";
    }
    if (!empty($em)) {
        $success = true;
        $display = "Thank you for your email. We will reply soon at $em";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Handle Form Submit</title>
    <link href="./css/styles.css" rel="stylesheet">
</head>
<body>
    <h1>Form Assignment</h1>
    <p>Did we perform well? Fill the form below and give us a feedback!</p>
        <div class= "form">
            <form action = "index.php" method="get">
              <fieldset>
                  <legend>Full name</legend>
                   <label>Full name</label>
                    <input type="text" name="fullname"
                           placeholder="Your name">
                           <br>
                           <br>
                           <label>Email</label>
                    <input type="text" name="email"
                           placeholder="Email">
                           <br>
                           <br>
                        <p>
                           <label>Text-Area</label>
                           <br>
                           <br>
                            <textarea name = "message" placeholder = "Write your message here..">
                            </textarea>
                        </p>
                    <input type="Submit" name="submit-btn" value="submit"> 
                </fieldset>
            </form>
    </div>
    <?php
    if (isset($display)) {
        echo $display;
    }
    if(isset($err)) {
        echo $err;
    }
    ?>
</body>
</html>
