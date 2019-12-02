<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'dpwh');

if(isset($_POST['insertdata']))
{
    $fname = $_POST['fname'];
    $hp = $_POST['hp'];
    $acer = $_POST['acer'];
    $dell = $_POST['dell'];
    $clone = $_POST['clone'];
    $processor = $_POST['processor'];
    $memory = $_POST['memory'];
    $hardDisk = $_POST['hardDisk'];
    $os = $_POST['os'];
    $msOffice = $_POST['msOffice'];
    $computerName = $_POST['computerName'];
    $division = $_POST['division'];
   
   $query =" INSERT INTO inventory(`fname`, `hp`, `acer`, `dell`, `clone`, `processor`, `memory`, `hardDisk`, `os`, `msOffice`, `computerName`, `division`) VALUES ('$fname','$hp','$acer','$dell','$clone','$processor','$memory','$hardDisk','$os','$msOffice','$computerName','$division')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>