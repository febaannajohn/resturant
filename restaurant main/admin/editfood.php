<?php
include('header.php');
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

    
        <div class="card">
            <div class="card-title">
                <h4>Add Food</h4>  
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="updatefood.php?id=<?php echo $_REQUEST['id']?>" method="POST" enctype="multipart/form-data">
                    <?php
                    include('config.php');
                    $id=$_GET['id'];
                    $sql="SELECT * FROM `tbl_food` WHERE id='$id'";
                    $res=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($res))
                    {
                    ?>      
                    <div class="form-group">
                            <label>Food Name</label>
                            <input type="text" value="<?php echo $row['name'];?>" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text"  name="descr" class="form-control" ><?php echo $row['descr'];?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" value="<?php echo $row['price'];?>" name="price" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" value="<?php echo $row['img'];?>" name="img" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" class="form-control">
                                <option <?php if($row['type']=="starters"){echo "selected";}?> value="starters">Starters</option>
                                <option <?php if($row['type']=="Breakfast"){echo "selected";}?> value="Breakfast">Breakfast</option>
                                <option <?php if($row['type']=="Dinner"){echo "selected";}?> value="Dinner">Dinner</option>
                                <option <?php if($row['type']=="Apitizer"){echo "selected";}?> value="Apitizer">Apitizer</option>
                            </select>
                        </div>
                
                        <button type="submit" name="sub" class="btn btn-default">Submit</button>
                    <?php
                    }
                    ?>
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