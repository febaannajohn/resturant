<?php
include('header.php');
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

    
        <div class="card">
            <div class="card-title">
                <h4>View Apply</h4>  
            </div>

            <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                <th scope="col">Booking ID</th>
                  <th scope="col">Name</th>
                 
                  <th scope="col">Address</th>
                  <th scope="col">Mobile</th>
                
                  <th scope="col">Price</th>
                  <th scope="col">Gpay ID</th>
                 
                  <th scope="col">Status</th>
                  <th scope="col">Approve/Cancel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include("config.php");
                                                    $ret=mysqli_query($conn,"select * from tbl_book");
                                                    $row=mysqli_num_rows($ret);
                                                    if($row>0){
                                                    while ($row=mysqli_fetch_array($ret)) {

                                                    ?>
                                                <tr>
                                               
                                                <th scope="row"><?php  echo $row['id'];?></th>
                  <td><?php  echo $row['name'];?></td>
                
                  <td><?php  echo $row['address'];?></td>
                  <td><?php  echo $row['mob'];?></td>
           
                  <td><?php  echo $row['price'];?></td>
                  <td><?php  echo $row['gpayid'];?></td>
                 
                  <td>
                  <?php
        if($row['status']==1)
        {
          echo "Approved";
        }
          else
          {
            echo "Not Approved"; 
          }
        ?>
                  </td>
                  <?php
                  if($row['status']==1)
                  {
    echo "<td><a class='btn btn-danger' href='cancelbooking.php?id=".$row['id']."'>Cancel Booking</a></td>";
}     
else
          {
            echo "<td><a class='btn btn-primary' href='approvebooking.php?id=".$row['id']."'>Approve</a></td>";
 
          }               
    ?>
                                                </tr>
                                               <?php }}?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                  


            
    </div>
</div>
</div>
<?php
include('footer.php');
?>