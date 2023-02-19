<?php
$conn=mysqli_connect('localhost','root','','nursery');

if(mysqli_connect_errno())
{
    echo 'Failed to conect to database'.mysqli_connect_error();
}
?>