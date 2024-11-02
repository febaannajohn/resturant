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
                    <form action="addfoodact.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Food Name</label>
                            <input type="text" name="f_name" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea type="text" name="f_descr" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="f_price" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="f_img" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" class="form-control">
                                <option value="starters">Starters</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Lunch">Lunch</option>
                                <option value="Dinner">Dinner</option>
                                <option value="Apitizer">Apitizer</option>

                            </select>
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