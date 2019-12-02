<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Side Navigation Bar</title>
    <link rel="stylesheet" href="stylesprofile.css">
   <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/eb5b4ad556.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Home</a></li>
             
             <li><a href="view.php"><i class="fas fa-eye"></i>View Data</a></li>
             <li><a href="#"><i class="fas fa-address-card"></i> About</a></li>
             <!-- media sub -->

           
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</li></a>
        </ul> 
       
    </div>
    <div class="main_content">
        <div class="header">This is the front  <i class="far fa-smile-wink"></i>.</div>  
    <!-- start -->
         <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Data </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    
</head>
<body>
    

<!-- Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="insertcode.php" method="POST">

            <div class="modal-body">
                <div class="form-group">
                    <label> First Name </label>
                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                </div>
   

                <div class="form-group">
                    <label>hp</label>
                    <input type="number" name="hp" class="form-control" placeholder="Enter value">
                </div>

                <div class="form-group">
                    <label>acer</label>
                    <input type="number" name="acer" class="form-control" placeholder="Enter value">
                </div>
                <div class="form-group">
                    <label>dell</label>
                    <input type="number" name="dell" class="form-control" placeholder="Enter value">
                </div>
                <div class="form-group">
                    <label>clone</label>
                    <input type="number" name="clone" class="form-control" placeholder="Enter value">
                </div>
                <div class="form-group">
                    <label>processor</label>
                    <input type="text" name="processor" class="form-control" placeholder="Enter processor">
                </div>
                <div class="form-group">
                    <label>memory</label>
                    <input type="text" name="memory" class="form-control" placeholder="Enter memory">
                </div>
                <div class="form-group">
                    <label>hardDisk</label>
                    <input type="text" name="hardDisk" class="form-control" placeholder="Enter Phone hardDisk">
                </div>
                <div class="form-group">
                    <label>OS</label>
                    <input type="text" name="os" class="form-control" placeholder="Enter Operating System">
                </div>
                <div class="form-group">
                    <label>Ms office</label>
                    <input type="text" name="msOffice" class="form-control" placeholder="Enter Operating System">
                </div>
                
                <div class="form-group">
                    <label>Computer name</label>
                    <input type="text" name="computerName" class="form-control" placeholder="Enter Operating System">
                </div>
                 <div class="form-group">
                    <label>Division</label>
                    <input type="text" name="division" class="form-control" placeholder="Enter Operating System">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
            </div>
        </form>

    </div>
  </div>
</div>




<!-- ####################################################################################################################### -->

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Edit Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="updatecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label> First Name </label>
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Name">
                </div>

                <div class="form-group">
                    <label> hp</label>
                    <input type="text" name="hp" id="hp" class="form-control" placeholder="Enter hp">
                </div>

                <div class="form-group">
                    <label> acer </label>
                    <input type="text" name="acer" id="acer" class="form-control" placeholder="Enter Course">
                </div>

                <div class="form-group">
                    <label> dell</label>
                    <input type="text" name="dell" id="dell" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>clone</label>
                    <input type="text" name="clone" id="clone" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>processor</label>
                    <input type="text" name="processor" id="processor" class="form-control" placeholder="Enter Phone Number">
                </div>
                 <div class="form-group">
                    <label>memory</label>
                    <input type="text" name="memory" id="memory" class="form-control" placeholder="Enter Phone Number">
                </div>
                 <div class="form-group">
                    <label>hardDisk</label>
                    <input type="text" name="hardDisk" id="hardDisk" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>os</label>
                    <input type="text" name="os" id="os" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>msOffice</label>
                    <input type="text" name="msOffice" id="msOffice" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>computerName</label>
                    <input type="text" name="computerName" id="computerName" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <label>division</label>
                    <input type="text" name="division" id="division" class="form-control" placeholder="Enter Division">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->





<!-- ####################################################################################################################### -->

<!-- DELETE POP UP FORM (Bootstrap MODAL) -->

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Delete Student Data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <form action="deletecode.php" method="POST">

            <div class="modal-body">

                <input type="hidden" name="delete_id" id="delete_id">

                <h4> Do you want to Delete this Data ??</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">  NO </button>
                <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
            </div>
        </form>

    </div>
  </div>
</div>

<!-- #################################################################################################### -->



<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h2>DATA </h2>
        </div>    
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                    ADD DATA
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-body">

            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'dpwh');

                $query = "SELECT * FROM inventory";
                $query_run = mysqli_query($connection, $query);
            ?>
                <table id="datatableid" class="table table-bordered table-responsive table-dark" >
                    <thead>
                        <tr>
                            <th scope="col"> ID</th>
                            <th scope="col">NAME</th>
                            <th scope="col">hp </th>
                            <th scope="col">acer</th>
                            <th scope="col">dell</th>
                            <th scope="col">clone</th>
                            <th scope="col">processor</th>
                               <th scope="col">memory</th>
                                <th scope="col">harDisk</th>
                                 <th scope="col">os</th>
                                  <th scope="col">msOffice</th>
                                   <th scope="col">computerName</th>
                                    <th scope="col">division</th>
                            <th scope="col"> EDIT </th>
                            <th scope="col"> DELETE </th>
                        </tr>
                    </thead>
            <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $row['id']; ?> </td>                            
                            <td> <?php echo $row['fname']; ?> </td>                            
                            <td> <?php echo $row['hp']; ?> </td>

                             <td> <?php echo $row['acer']; ?> </td>                            
                            <td> <?php echo $row['dell']; ?> </td>                            
                            <td> <?php echo $row['clone']; ?> </td> 

                            <td> <?php echo $row['processor']; ?> </td>
                            
                            <td> <?php echo $row['memory']; ?> </td>
                            
                            <td> <?php echo $row['hardDisk']; ?> </td>

                            <td> <?php echo $row['os']; ?> </td>

                            <td> <?php echo $row['msOffice']; ?> </td>

                            <td> <?php echo $row['computerName']; ?> </td>

                            <td> <?php echo $row['division']; ?> </td>
                            <td> 
                                <button type="button" class="btn btn-success editbtn"> EDIT </button>
                            </td> 
                            <td>
                                <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                            </td>
                        </tr>
                    </tbody>
            <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                </table>
            </div>
        </div>


    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>

<script>

$(document).ready(function() {

    $('#datatableid').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Your Data",
        }
    });

});

</script>







<script>

$(document).ready(function () {

    $('.deletebtn').on('click', function() {
        
        $('#deletemodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#delete_id').val(data[0]);
      
    });
});

</script>



<script>

$(document).ready(function () {
    $('.editbtn').on('click', function() {
        
        $('#editmodal').modal('show');

        
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
             $('#fname').val(data[1]);
            $('#hp').val(data[2]);
            $('#acer').val(data[3]);
            $('#dell').val(data[4]);
            $('#clone').val(data[5]);
            $('#processor').val(data[6]);
            $('#memory').val(data[7]);
            $('#hardDisk').val(data[8]);
            $('#os').val(data[9]);
            $('#msOffice').val(data[10]);
            $('#computerName').val(data[11]);
            $('#division').val(data[12]);
            
    });
});

</script>


</body>
</html>

   



<!-- end table -->
<!-- 
      </div>
    </div>
</div> -->

</body>
</html>