<html>
<head>
<title>Abdullah Zafar DeHash</title>
</head>
<body>
<h1>MD5 cracker</h1>
<h3 style="font-family:monospace">Debug Output</h3>
<div style="font-family:monospace">
<?php
function check (){
    $str = $_GET['md5'];
    $res = "0";
    $count=0;
    for ($i=0;$i<=9;$i++){
        for ($j=0;$j<=9;$j++){
            for($k=0;$k<=9;$k++){
                for ($l=0;$l<=9;$l++){
                    $temp = $i.$j.$k.$l;
                    $check_hash = hash('md5',$i.$j.$k.$l);
                    //echo $i.$j.$k.$l."  ".$check_hash." ".gettype($check_hash)." ".$str." ".gettype($str)."<br>";
   
                    if ($check_hash==$str){
                        $res = $i.$j.$k.$l;              
                    }
                    if ($count<15){
                        echo $check_hash." ".$i.$j.$k.$l."<br>";
                        $count++;
                    }
                }
            }
        }      
    }
    return $res;
}

if (isset($_GET['md5'])){
    $t1 = microtime(true);
    $res = check();
    $t2 = microtime(true)-$t1;
   
    if ($res!=="0"){
        echo "Elapsed Time: ". $t2."<br>"; 
        echo "Pin: ".$res;
    }
    else {
        echo "Pin: Not Found";
    }

}
?>
</div>
<form action="" method="GET">
This application takes an MD5 hash of a four digit pin and check all 10,000 possible four digit PINs to determine the PIN.
<br>
<br>
<input type="text" name="md5">
<input value="Crack Md5" type="submit">
</form>
<a href="encoder.php">Generate Md5 Hash</a><br>
<a href="pinmaker.php">Make an Md5 pin</a>
</body>
</html>
