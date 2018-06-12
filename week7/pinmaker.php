<html>
<head>
<title>Abdullah Zafar Md5</title>
</head>
<body>
<h1>MD5 Pin Maker</h1>
<div style="font-family:monospace">
<?php
if (isset($_GET['md5'])){
    if (!is_numeric($_GET['md5'])){
     echo "<div style=\"color:red\">The input must be Numeric</div>";

    }
    else if (strlen($_GET['md5'])!=4){
        echo "<div style=\"color:red\">The input must be exactly 4 characters</div>";
    }
    else{
        echo hash('md5',$_GET['md5']);
    }
}
?>
</div>
<form action="" method="GET">
<input type="text" name="md5">
<input value="Compute Md5 for Pin" type="submit">
</form>
<a href="index.php">Back to Cracking</a>
</body>
</html>
