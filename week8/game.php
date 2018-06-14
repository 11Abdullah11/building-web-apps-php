<?php

$names = array('Rock','Paper','Scissors');

if (!isset($_GET['name'])){
    die("Name parameter missing");

}
if (isset($_POST['logout'])){
    header('Location: index.php');
}
// This function takes as its input the computer and human play
// and returns "Tie", "You Lose", "You Win" depending on play
// where "You" is the human being addressed by the computer
function check($computer, $human) {
    $win = array();
    $win['2']='0';
    $win['0']='1';
    $win['1']='2';
    if($computer===$human){
            return "Tie";
    }
    else if($win[$computer]==$human){
          return "You Win";
    }
        return "You Lose";
   
}
function random(){
    return rand(0,2);
}
function gameplay(){
   global $names;
   $computer = random();
   $result = check($computer,$_POST['human']);
   echo "<div class=\"result\">Your Play=".$names[$_POST['human']]." Computer Play=".$names[$computer]." Result=".$result."</div>";
}
function test(){   
    global $names;
    $str = "";
    for($c=0;$c<3;$c++) {
    for($h=0;$h<3;$h++) {
        $r = check($c,$h);
    //    echo "<br>".$c."  ".$h." ";
         $str=$str."Human=$names[$h] Computer=$names[$c] Result=$r</br>";
    }
    }
    echo "<div class=\"result\">".$str."</div>";
    

}
?>
<html>
<head>
<title>Abdullah Zafar  RPS</title>
<style>
.result{
border:solid 1px #00000040;
padding:1%;
margin: 2px;
background-color: #f0f0f5;
border-radius:6px;
display: inline-block;
font-family:monospace;
font-size:16px;
}
body{
margin:5%;
}
</style>
</head>
<body>
<h1>Rock Paper Scissors</h1>
<?="Welcome:   ".$_GET['name']?>
<form method="POST">
<select name="human">
<option value="-1" selected>Select</option>
<option value="0">Rock</option>
<option value="1">Paper</option>
<option value="2">Scissors</option>
<option value="3">Test</option>
<input type="submit" value="Play" name="Play">
<input type="submit" value="Logout" name="logout">
</form>
<?php 
if (isset($_POST['Play']) && ($_POST['human']!=='select')){
    if ($_POST['human']!='3'){
        gameplay();
    }
    else test();
}
else {
echo"<span class=\"result\">Please select a strategy and press play</span>";
}
?>

</body>
</html>
