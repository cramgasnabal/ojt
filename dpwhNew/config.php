<?php

?>
<?php
$server ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="dpwh";

$conn =mysqli_connect($server,$dbuser,$dbpass,$dbname);

if(mysqli_connect_error())
{
	die("could not connect to the server");
}
?>