<?php
include('header.php');
?>
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">

    
        <div class="card">
            <div class="card-title">
                <h4>Add Chef</h4>  
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="addchefact.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Chef Name</label>
                            <input type="text" name="name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Chef Position</label>
                            <input type="text" name="pos" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img" class="form-control">
                        </div>
                
                        <button type="submit" name="sub" class="btn btn-default">Submit</button>
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