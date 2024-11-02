<?php
include('header.php');
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

    
        <div class="card">
            <div class="card-title">
                <h4>View Blog</h4>  
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
                                                    <th>Description</th>
                                                 
                                                    
                                                    <th>Image</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include("config.php");
                                                    $ret=mysqli_query($conn,"select * from tbl_blog");
                                                    $row=mysqli_num_rows($ret);
                                                    if($row>0){
                                                    while ($row=mysqli_fetch_array($ret)) {

                                                    ?>
                                                <tr>
                                                
                                                    <td><?php  echo $row['id'];?></td>
                                                    <td><?php  echo $row['name'];?></td>
                                                    <td><?php  echo $row['descr'];?></td>
                                                    
                                                    <td><img src="images/<?php  echo $row['img'];?>" width="80" height="80"></td>
                                                    <?php
                                                  
                                                    echo "<td>";
                                                    echo "<a href='editblog.php?id=".$row['id']."'><button class='btn btn-warning'>Update</button></a>";
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo "<a href='deleteblog.php?id=".$row['id']."'><button class='btn btn-danger'>Delete</button></a>";
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