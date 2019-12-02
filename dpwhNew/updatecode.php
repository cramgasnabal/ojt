<?php
$connection = mysqli_connect('localhost','root','');
mysqli_select_db($connection, 'dpwh');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
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
       
$query =" UPDATE inventory SET fname='$fname', hp='$hp', acer='$acer', dell ='$dell', clone='$clone',processor='$processor', memory='$memory', hardDisk='$hardDisk',os='$os', msoffice='$msOffice',computerName='$computerName',division='$division' WHERE id='$id' ";

    $query_run = mysqli_query($connection, $query);
        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>