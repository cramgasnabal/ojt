<?php
session_start();
if(isset($_SESSION['username'])){
    header('location:profile.php');
}

?>
<!--  -->
<html>
<head>
    <title>Web login admin</title>
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="wrapper">
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post" class="form-signin">
<h2 class="form-signin-heading">Please login</h2>
<input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
      
 <?php
if($_POST)
{
    $username =$_POST['username'];
    $password =$_POST['password'];

    include 'config.php';

    $sql ="Select * from admin where username='$username' && password= '$password'";
    
    $result = mysqli_query($conn, $sql) or die("could not execute query:" . mysqli_error($conn));
    if(mysqli_num_rows($result) > 0)
    {
        //redirect page
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:profile.php");

    }
    else
        echo '<span style="color:#ff0000;text-align:center;">Wrong Username or Password!</span>';

    mysqli_close($conn);
    header("Refresh: 1");
}
?>
<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button> 

</form>
</div>

</body>
</html>