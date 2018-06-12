<html>
<head>
<title>Abdullah Zafar Md5</title>
</head>
<body>
<h1>MD5 Maker</h1>
<div style="font-family:monospace">
<?php
if (isset($_GET['md5'])){
       echo hash('md5',$_GET['md5']);
}
?>
</div>
<form action="" method="GET">
<input type="text" name="md5">
<input value="Compute Md5" type="submit">
</form>
<a href="index.php">Back to Cracking</a>
</body>
</html>
