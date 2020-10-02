<h1 align="center"> Edit Your Account</h1>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label> Costumer Name:</label>
        <input type="text" name="c_name" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label> Costumer Email:</label>
        <input type="text" name="c_email" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label> Costumer Country: </label>
        <input type="text" name="c_country" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label> Costumer Contact:</label>
        <input type="text" name="c_contact" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label> Costumer Address:</label>
        <input type="text" name="c_address" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label> Costumer Image:</label>
        <input type="file" name="c_image" class="form-control form-height-custom" required>
        <img class="img-responsive" src="customer/customer_images/dawood1.jpg" alt="costumer image">
    </div>
    
    <div class="text-center">
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div>
</form>