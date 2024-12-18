<h1>File index.php</h1>
<?php
$my_arr = array(1,2,3,4,5, "myindex" => 6);
// count($my_array)
foreach ($my_arr as $key => $value) {
 echo "<br>";
?>
    <h1><?php echo  $my_var?></h1>
<?php
} // end for
?>



<?php
$my_arr = array(1,array(2),3,4,5,"myindex" => (3+3),"myindex" => 7);
print_r($my_arr);
echo "<br>";
$my_arr2[]=1;
$my_arr2[]= 2;
$my_arr2[]= 3;
print_r($my_arr2);
echo"<br>";

if(false){
    echo "if fault";
}else if(TrUE || false){
    echo "else if true";
}else {
    echo "else";
}
echo "<br>";




$myvar = "Hello World";
$myvar = 1;
echo "<h1>". $myvar ."</h1>";
echo "<br>";
$x = 1;
function x(){
   global $x;
   $x = 2;

}
echo $x;
echo "<br>";
x();
echo $x;
echo"<br>";
echo "1.5"+"1";
echo "<br>";
$x = "B"; 
$x++;
echo $x ;
echo "<br>"
?>
<h1><?php echo $myvar ; ?></h1>