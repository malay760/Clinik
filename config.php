<?php
//Databse Connection file
$con=mysqli_connect("127.0.0.1:3306", "root", "", "clinik");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>