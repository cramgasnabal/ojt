
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bootstrap 4 Responsive Datatable and Export to PDF, CSV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
</head>
<body>
     <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'dpwh');

                $query = "SELECT * FROM inventory";
                $query_run = mysqli_query($connection, $query);
            ?>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>fname</th>
                <th>hp</th>
                <th>acer</th>
                <th>dell</th>
                <th>clone</th>
                <th>processor</th>
                <th>memory</th>
                <th>hardDisk</th>
                <th>os</th>
                <th>msOffice</th>
                <th>computerName</th>
                <th>division</th>
            </tr>
        </thead>
        <tbody>
             <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tr>           
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
                            </tr>
        <?php
                }
                    }
                else
                {
                    echo "No record found";
                }
        ?>

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'csv', 'pdf', 'colvis' ]
        } );
     
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    } );
     </script>
</body>
</html>
