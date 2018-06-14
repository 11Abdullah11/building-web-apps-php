<?php
if ( isset($_POST['cancel'] ) ) {
    header("Location:index.php");
    return;
}
function check(){
    $stored_hash="1a52e17fa899cf40fb04cfc42e6352f1";
    $salt = 'XyZzy12*_';
    $user= htmlentities($_POST['who']);
    $pass= $_POST['pass'];
    $md5 = hash('md5', 'XyZzy12*_'.$pass);
    if (strlen($user)<1 ||strlen($pass)<1){
        echo "<div style=\"color:red\">Username and Password are required.</div>";
    }
    else if ($md5!==$stored_hash){
        echo "<div style=\"color:red\">Incorrect password</div>";  
    }
    else {
        header("Location: game.php?name=".urlencode($user));
    }
}
?>

<html>
<head>
<title>Abdullah Zafar </title>
</head>
<body>
    <h1>Please Log in</h1>
    <?php if(isset($_POST['who'])){check();}?>
    <form method="post">
        <label for="who">Username: </label>
        <input type="text" name="who" id="who"><br>
        <label for="pass">Password :</label>
        <input type="texr" name="pass" id="pass"><br>
        <input type="submit" value="Log In" name="login">
        <input type="submit" value="cancel" name="cancel">
    </form>
<p>
For a password hint, view source and find a password hint
in the HTML comments.
<!-- Hint: The password is the three letter name of programming language in this course
 (all lower case) followed by 123. -->
</p>
</body>
</html>
