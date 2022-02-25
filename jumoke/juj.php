<?php

$name = "Maria";
$gender = "Female";
$country = "Thailand";

function profile($name,$gender,$country){
   echo $name . "<br>";
   echo $gender . "<br>";
   echo $country . "<br>";
}
 
 profile( $name,$gender,$country);
?>
<?php

function getFullName($firstname,$lastname){
 return $firstname.' '.$lastname;

}

echo getFullName('Abhik','Chakraborty');
?>

<!DOCTYPE HTML>
<html>
<head></head>
<body>
<div class="wrap">
 <form name="cal">
 <input type="text" name="display">
 <br /><br />
 <input type="button" value="9" onclick="cal.display.value+='9'">
 <input type="button" value="8"onclick="cal.display.value+='8'">
 <input type="button" value="7"onclick="cal.display.value+='7'">
 <input type="button" value="+"onclick="cal.display.value+='+'">
 <br /><br />
  <input type="button" value="6"onclick="cal.display.value+='6'">
 <input type="button" value="5"onclick="cal.display.value+='5'">
 <input type="button" value="4"onclick="cal.display.value+='4'">
 <input type="button" value="-"onclick="cal.display.value+='-'">
 <br /><br />
  <input type="button" value="3"onclick="cal.display.value+='3'">
 <input type="button" value="2"onclick="cal.display.value+='2'">
 <input type="button" value="1"onclick="cal.display.value+='1'">
 <input type="button" value="*" onclick="cal.display.value+='1'">
 <br /><br />
 <input type="button" value="0"onclick="cal.display.value+='0'">
 <input type="button" value="/"onclick="cal.display.value+='/'">
 <input type="button" value="%"onclick="cal.display.value+='%'">
 <input type="button" value="="onclick="cal.display.value+=eval(cal.display.value)">
 <br /><br />
 <input type="button" value="delete" onclick="cal.display.value=''">
 
 </form>
 </div>
<?php
/**
 * @author lolkittens
 * @copyright 2020
 */
 ?>
 <?php
 $y = 4;
 $g = 6;
 
 function addition() {
    $GLOBALS ['g'] =$GLOBALS ['y'] + $GLOBALS ['g'];
 }
 addition();
 echo "$g";
 
 echo '<br>'
 ?> 
 <?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
 <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>
 <?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
 <?php
$age = array("Peter" => "35", "Ben" => "46", "Joe" => "6");
 echo $age ['Peter'] . $age  ['Ben']. $age['Joe'];
 echo"<br>";
 ?>
 <?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
 <?php
 $cars = array("Brown" ,"Blue","Green");
 echo "i like ". $cars[2]. "," . " and " . $cars[0].".";
 echo("<br>");

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>
<br />
<?php
$qoseem = array(25,47,18,90,35,76,86,24,73);
print_r($qoseem);
echo "<br/>";
echo max($qoseem);
echo "<br/>";
echo min($qoseem);

echo "<br/>";
echo sort($qoseem);


?>
 

<form action="juj.php" method="post">
            Find solution for ax^2 + bx + c<br>
            a: <input type="text" name="a"><br>
            b: <input type="text" name="b"><br>
            c: <input type="text" name="c"><br>
            <input type="submit" value="Find x!">
        </form>   

<?php
    $a=$_POST["a"];
    $b=$_POST["b"];
    $c =$_POST["c"];

    $d = $b*$b - 4*$a*$c;
    echo $d;
    
    if($d < 0) {
        echo "The equation has no real solutions!";
    } elseif($d = 0) {
        echo "x = ";
        echo (-$b / 2*$a);
    } else  {
        echo "x1 = ";
        echo (-$b + sqrt($d)) / (2*$a);
        echo("<br>");
        echo "x2 = ";
        echo (-$b + sqrt($d)) / (2*$a);
        
        
        
        }
        echo "<br>";
    
    
?>
<?php
$m = "3x^2 -5x + 2";
echo($m);
echo("<br>");
//ax^2 + b +c =0
//a=3,b=-5,c=2
$a=3;
$b= -5;
$c=2; $x;$y; $t;
function equation($a,$b,$c){
    $t=(($b*$b))-(4*$a * $c);
    return (-$b + sqrt($t)) / (2*$a);
}
$result =equation(3,-5,2);
echo($result);
?>
<br />
<?php
function cube($x,$y) {
    
    return $y + $y;
}
$result=cube(3,4);
echo($result);
?>
<br />
<?php
echo "<h1>I love Lagos</h1>";
echo "<hr>";
echo "<p>The house belongs to me</p>";
echo("<br>")
?>
<form action="juj.php" method="post">
<label>Name:</label><input type="text" name="username">
<input type="submit" name="submit"><br />
<input type="number" name="num1"><br />
<input type="number" name="num2"><br />
<input type="submit" name="submit"><br />

</form>
<?php
echo$_POST["username"]
?>
<br />
<?php
function paul($blue , $year) {
    echo "$blue reference was born in $year <br>";
}
paul("LAWAL", "1997");
paul("lanre" ,"2000");
echo"<br>";
function setheight($maxheight = 90) {
    echo"The height: is $maxheight <br>";
}
setheight("18");
setheight("10");
setheight("100");
echo("<br>");

?>
<?php
function substract($x, $y){
    $z = $y - $x;

}

echo bcsub(5, 10) . "<br>";
echo bcsub(7, 13) . "<br>";
echo bcsub(2, 4);
?>
<?php
$taller = "Differ";
echo strtolower($taller);
echo("<br>")

?>
<?php
echo abs(5600);
echo("<br>");
echo sqrt(25);
echo("<br>");
echo pow(3,2);
?>
<?php
$love = "Bolatito";
echo"i like $love !" ;
echo"<br>";
?>
<?php
$txt = "W3Schools.com";
echo "i like you" . $txt. "4";
echo"<br>";
?>
<?php
function ademola() {
    echo "Hello world";
}
Ademola();
echo("<br>")
?>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>
<?php

$favorite = "white";
switch ($favorite)  {
       case "white":
           echo "I love white!";
           break;
 case "red":
 echo"I love red!";
 break;
 case "yellow":
 echo "I love yellow!";
 break;
 default:
 echo"I didn't love neither blue,red,nor yellow";
  
    
}
    
echo("<br>");
$number = 10;
switch ($number) {
    case 55;
    echo"nop";
    break;
    case 40;
    echo("failed");
    break;
    case 11;
    echo("won");
    break;
 default:
    echo("none of the options are correct");
    
    
  }  
    

echo("<br>");
?>
<?php 
$ola = 3;
if ($ola > 10){
    echo("True");
}
elseif ($ola < 2){
    echo("false");
}
else{
    echo"sorry you failed!";
}
echo("<br>")
?>
<?php 
for ($tala= 0; $tala <=8; $tala++){
    echo "The number is:$tala <br>";
}
echo("<br>");
?>
<?php 
$y = 9;
do {
    echo "The number is: $y <br>";
    $y++;
}
while ($y < 8);
echo"<br>";
?>
<?php
$x = 2;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>
<?php
$x = 4;
$y = 8;
$s= 5;
function myTest() {
    global $x, $y,$s;
    $y = $x + $y +$s;
}

myTest();
echo $y; // outputs 15
?>
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!<br>";
print "This , string , was , made , with multiple parameters.";
?>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>$txt1</h2>";
print "Study PHP at $txt2<br>";
print $x + $y;
echo('<br>');
?>
<?php
$price = 100;
if ($price < "50"){
    echo($price * 0.25 );   
}
elseif ($price == "90") {
    echo($price * 0.1);
}
else {
    echo "sorry you failed1";
}

echo('<br>');
?>
<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 5;

echo "<h2>$txt1</h2>";
echo "Study PYTHON at $txt2<br>";
echo $x + $y;
echo'<br>';
?>
<?php
$x = 5985;
var_dump($x);
echo("<br>");

?>
<?php
if (4 > 5 || 3 > 6 );
echo "True";

?>
<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
echo('<br>');
?>
<?php
$x = "Hello world!";
echo $x;
$x = null;
var_dump($x);
echo('<br>');
?>
<?php
$y = 'labre balooo';
echo(strlen($y));
echo('<br>');
?>
<?php
echo strpos("Hello world!", "world"); // outputs 6
echo"<br>";
?>
<?php
echo str_replace("Messi", "Ronaldo ", "Messi is a wolrd best player!"); // outputs Hello Dolly!
?>
<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>
</body>
</html>