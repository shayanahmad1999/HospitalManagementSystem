<?php

    require 'include/connection.php';

    $bid = $_GET['bid'];
    $query = "select *,(Doctor_Charge+Room_Charge+Laboratory_Charge) as total_bill from bill where Patient_ID = '$bid' and Bill_Status = 1";
    $go = mysqli_query($connect,$query);
?>
<html>
    <head>
        <?php
          require 'include/navbar.php';
          require 'include/head.php';
          require 'include/aside.php';
        ?>
        <style>
          body{
            background-color:aliceblue;
          }
          @media print{
            button{
              visibility: hidden;
            }
          }
        </style>
    </head>
    <body>
      <br><br><br><br>
    <div class="card-body">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <table id="example2" class="table table-hover">
                  <tbody>
                  <?php 
                  while($show = mysqli_fetch_array($go)) { ?>
                  <tr>
                    <td><label for="">Patient ID</label></td>
                    <td><?php echo $show['Patient_ID']; ?></td>
                  </tr>
                  <tr>
                    <td><label for="">No of Days</label></td>
                    <td><?php echo $show['No_of_Days'] ?></td>
                  </tr>
                  <tr>
                    <td><label for="">Doctor Charge</label></td>
                    <td><?php echo $show['Doctor_Charge'] ?></td>
                  </tr>
                  <tr>
                    <td><label for="">Room Charge</label></td>
                    <td><?php echo $show['Room_Charge'] ?></td>
                  </tr>
                  <tr>
                    <td><label for="">Laboratory Charge</label></td>
                    <td><?php echo $show['Laboratory_Charge'] ?></td>
                  </tr>
                  <tr>
                    <td><label for="">Total Bills</label></td>
                    <td><?php echo $show['total_bill'] ?></td>
                  </tr>
                  <?php  } ?>
                </tbody>
                </table>
                <button class="btn btn-info" onclick="window.print()"><i class="fas fa-print"></i></button>
        </div>
      </div>           
    </div>
    </body>
</html>