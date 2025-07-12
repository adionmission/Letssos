
<?php
$u=$_POST['name'];
$p=$_POST['pwd'];

$f=0;
$conn= mysqli_connect("parameter1, parameter2, parameter3");
mysqli_select_db($conn,"");
$q="select * from mytable";
$row=mysqli_query($conn,$q) or die("Error: ".mysqli_error($conn));
while($r=mysqli_fetch_array($row))
{
if($u==$r['username'] && $p==$r['password'])
{
$f=1;
break;
}}
if($f==1)
{
header('location:sa11.html');
}
else{
echo "username or password is invalid";
}
?>

