<?php
$a = 5;
echo gettype($a); // return just  type
var_dump($a); // return type and content

/**
 * Const
 */

define('PI',3.14);
echo PI;


/**
 * type conversion
 */
$a = 5;
$b = (string) $a;

/**
 * Numbers
 */
echo "<br>";
$a = number_format(15905.75,3,'.',',');
echo $a;

/**
 * String
 */

$name = "this is ahmed";
echo "user name is $name";
echo 'user name is $name';
strpos($name,'t'); 
stripos($name,'t');//ignore cases
echo "<br>";
echo nl2br("thi is
long multinline
text");

$payload = "<script>alert()</script>";
html_entity_decode(htmlentities($payload));


/**
 * Array
 */
$arr = [1,2,3];
$arr[]=4;
$arr = array(1,2,3);
array_shift($arr);
array_unshift($arr,4);
$str = "this|is|the|string";
$arr = explode("|",$str);
$str = implode('|',$arr);
array_search($arr,'this');
array_merge($arr,$arr);

$arr = [1,2,3];
function odd($n){
    return $n&1;
}
$arr = array_filter($arr,'odd');
print_r($arr);
$arr = array_map(fn($n) => $n*$n,$arr);
print_r($arr);
$arr = array_reduce($arr,fn($carry,$item) => $carry+$item);
echo $arr . "<br>";

$arr = ['c'=>1,'b'=>2,'a'=>3];
print_r(array_keys($arr));
print_r(array_values($arr));
ksort($arr);
print_r($arr);
echo "<br>";

/**
 * null coalescing operator
 */
$decide = isset($is) ? $is : 'stay here';
$decide = $is ?? 'stay here'; 
echo $decide;
// null coalescing assignment operator
$person=[];
$person['name'] = 'hassan';
$person['name'] ??='default';
$_SESSION['counter']++ ?? 1;


/**
 * Session (file used by server, stored on sever, contain user data)
 * store unlimited amount of data
 * destroyed when user close the browser
 * based on cookies
 */
session_start();
echo session_id();
$_SESSION['counter']++ ?? 1;
echo $_SESSION['counter'];

/**
 * Cookie (file used by browser stored on client, contains user data)
 * max 4KB
 * used for:
 * - session mgmt
 * - personalization
 * - Tracking
 */

setcookie("key","value",time()+60);

