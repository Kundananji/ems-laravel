<div>
    <h1>Hello World</h1>
    <p>This page lists employees</p>

    <a href="create">Add Employee</a>

    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <th>

            </th>
            <th>
                Man NO
            </th>
            <th>
                Name
            </th>
            <th>
                Email Address
            </th>
            <th>
                Department
            </th>
            <th>
                Supervisor
            </th>
        </thead>
        <tbody>
            <?php

            $count = 0;
            foreach ($employees as $employee) {

            ?>
                <tr>
                    <td>
                        <?php echo ++$count?>
                    </td>
                    <td>
                       <?php echo $employee->Man_No?>
                    </td>
                    <td>
                    <?php echo $employee->Name?>
                    </td>
                    <td>
                    <?php echo $employee->Email_Address?>
                    </td>
                     <td>
                    <?php echo $employee->department->Name?>
                    </td>
                    <td>
                    <?php echo $employee->supervisor?->Name?>
                    </td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>

</div>