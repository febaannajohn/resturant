<?php
include('header.php');
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

    
        <div class="card">
            <div class="card-title">
                <h4>View User</h4>  
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
                                                <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Mobile</th>
                                                    
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include("config.php");
                                                    $ret=mysqli_query($conn,"SELECT * FROM tbl_userregister");
                                                    $row=mysqli_num_rows($ret);
                                                    if($row>0){
                                                    while ($row=mysqli_fetch_array($ret)) {

                                                    ?>
                                                <tr>
                                               
                                                    <td><?php  echo $row['id'];?></td>
                                                    <td><?php  echo $row['name'];?></td>
                                                    <td><?php  echo $row['email'];?></td>
                                                    <td><?php  echo $row['address'];?></td>
                                                    <td><?php  echo $row['mobno'];?></td>
                                                    <?php
                                                  
                                                    
                                                    echo "<td>";
                                                    echo "<a href='deletelist.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a>";
                                                    echo "</td>";
                                                 
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