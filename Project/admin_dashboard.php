<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
           <div class="col-md-12">
               <center><h3>Checked In Users Details</h3></center>
           </div>
       </div><br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>date</th>
                            <th>from</th>
                            <th>to</th>
                            <th>bus</th>
                            
                        </tr> 
                    </thead>
                <?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"buses");
                    $query = "select * from buss;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $user_count = $user_count + 1;
                        ?>
                            <tr>
                                <td><?php echo $user_count;?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['phon'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['frm'];?></td>
                                <td><?php echo $row['tu'];?></td>
                                <td><?php echo $row['bus'];?></td>
                               
                            </tr>
                        <?php
                    }
                ?>
</body>
</html>