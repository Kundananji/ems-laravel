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

    <?php if (session('success')): ?>
        <p><?php echo session('success'); ?></p>
    <?php endif; ?>



    <div class="alert alert-danger">
        <ul>
            <?php
        
            if ($errors->any()) {
                foreach ($errors->all() as $error) {
            ?>
                    <li>
                        <?php echo $error ?>
                    </li>
            <?php
                }
            }
            ?>
        </ul>
    </div>

    <form method="POST" action="/employees/save">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group">
            <label for="Man_No">ManNo</label>

            <?php
            if ($errors->get('Name')) {
            ?>
                <div class="alert alert-danger" style="color:red"><?php echo $errors->get('Name')[0]; ?></div>
            <?php
            }
            ?>
            <input type="text" name="Man_No" class="form-control" placeholder="Man No" value="<?php echo old("Man_No") ?>">
        </div>
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="Name" class="form-control" placeholder="Name" value="<?php echo old("Name") ?>">
        </div>
        <div class="form-group">
            <label for="Email_Address">Email Address</label>
            <input type="email" name="Email_Address" class="form-control" placeholder="Email Address" value="<?php echo old("Email_Address") ?>">
        </div>

        <div class="form-group">
            <label for="Department_Id">Department</label>
            <input type="text" name="Department_Id" class="form-control" placeholder="Department ID" value="<?php echo old("Department_Id") ?>">
        </div>

        <div class="form-group">
            <label for="Supervisor">Supervisor</label>
            <input type="text" name="Supervisor" class="form-control" placeholder="Supervisor" value="<?php echo old("Supervisor") ?>">
        </div>

        <button type="submit">Submit</button>
    </form>

</body>

</html>