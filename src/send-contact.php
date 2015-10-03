
<?php 
$HTTP_POST_VARS = $_POST;
?>




<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <title>Jessica Thomas - Portfolio</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:700,500,500italic,700italic,400' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="container">
    <div class="row header">
        <div class="col-sm-4 col-xs-12 logo"><a href="index.html">Jessica Thomas</a></div>
        <div class="col-sm-8 col-xs-12"><nav>
            <a class="tab" href="work.html"><img src="images/work-computer.jpg"><li>Work</li></a>
            <a class="tab" href="process.html"><img src="images/light-process.jpg"><li>Process</li></a>
            <a class="tab" href="experience.html"><img src="images/ribbon-experience.jpg"><li>Experience</li></a>
            <a class="tab" href="contact.html"><img src="images/email-contact.jpg"><li>Contact</li></a>
        </nav>
        </div>
    </div>
</div>
<div class="fluid">
    <div class="row"><div class="col-md-12"><img class="hero" src="images/watercolor.jpg"></div></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12"><h1>Contact</h1>

            <div class="form-area">
<p>Thank you for submitting the form.  You will be contacted shortly. </p>
            </div>



        </div>
        <div class="row">
    <div class="col-md-12">            <footer>
        &copy; JessicaThomas.info

    </footer>
    </div>
    </div>
</div>
<script src="scripts/jquery-2.1.4.min.js" ></script>
<script src="scripts/scripts.js" type="text/javascript"></script>
</body>
</html>





<?php
/* this part can either be in the same file as the form or it can be in a different file. If you want this in a different file, make the "action" of the form go to that file */

if($HTTP_POST_VARS) {
$body = "";

while(list($key, $val) = each($HTTP_POST_VARS))
{
  $body .= "$key: $val\n";
}
$headers = "From: ".$_POST['email'];
mail("jessica.anne.thomas@gmail.com",// to
"Website Contact Form",
$body,$headers);


}

// end form processing

?>