<?php
$servername="localhost";
$username="root";
$password="";
$dbname="melomix";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "connection problem";
}
// else{
//     echo "khatra";
// }
?>
