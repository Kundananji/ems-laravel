<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>


<?php
/*
    if($employee){
        echo'<p>Successfully created!</p>';
    }*/
?>

<?php if(session('success')): ?>
    <p><?php echo session('success'); ?></p>
<?php endif; ?>

<form method="POST" action="/employees/save">
     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
     <div class="form-group">
        <label for="Man_No">ManNo</label>
        <input type="text" name="Man_No" class="form-control" placeholder="Man No">
     </div>
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" placeholder="Name">
     </div>
    <div class="form-group">
        <label for="Email_Address">Email Address</label>
        <input type="email" name="Email_Address" class="form-control" placeholder="Email Address">
     </div>

    <div class="form-group">
        <label for="Department_Id">Department</label>
        <input type="text" name="Department_Id" class="form-control" placeholder="Department ID">
     </div>

    <div class="form-group">
        <label for="Supervisor">Supervisor</label>
        <input type="text" name="Supervisor" class="form-control" placeholder="Supervisor">
     </div>

     <button type="submit">Submit</button>
</form>

</body>
</html>
