<?php

$con=new mysqli('localhost','root','','project');
if($con)
{
	//echo "Database conneced successful";
}
else
{
    die(mysqli_error($con));
}

?>