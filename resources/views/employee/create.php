<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>

<?php
    if($employee){
        echo'<p>Successfully created!</p>';
    }
?>

<form method="get" action="/employees/save">
     <div class="form-group">
        <label for="ManNo">ManNo</label>
        <input type="text" name="ManNo" class="form-control" placeholder="Man No">
     </div>
    <div class="form-group">
        <label for="Name">Name</label>
        <input type="text" name="Name" class="form-control" placeholder="Name">
     </div>
    <div class="form-group">
        <label for="EmailAddress">Email Address</label>
        <input type="email" name="EmailAddress" class="form-control" placeholder="Email Address">
     </div>

    <div class="form-group">
        <label for="Department">Department</label>
        <input type="text" name="Department" class="form-control" placeholder="Department">
     </div>

    <div class="form-group">
        <label for="Supervisor">Supervisor</label>
        <input type="text" name="Supervisor" class="form-control" placeholder="Supervisor">
     </div>

     <button type="submit">Submit</button>
</form>
    
</body>
</html>