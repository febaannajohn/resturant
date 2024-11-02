<?php
include('header.php');
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

    
        <div class="card">
            <div class="card-title">
                <h4>Add Category Form</h4>  
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="updatelist.php?id=<?php echo $_REQUEST['id']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $proid=$_GET['id'];
                    $sql="SELECT * FROM `tbl_food` WHERE id='$proid'";
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>      
                    <div class="form-group">
                            <label>Food Name</label>
                            <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" value="<?php echo $row['descr'];?>" name="descr" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" value="<?php echo $row['price'];?>" name="price" class="form-control" >
                        </div>
                      
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control" >
                        </div>
                
                        <button type="submit" name="sub" class="btn btn-default">Submit</button>
                    <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include('footer.php');
?>       


<?php
include('footer.php');
?>