<div>
    <h1>Hello World</h1>
    <p>This page lists employees</p>

    <table>
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
                    <?php echo $employee->department?>
                    </td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>

</div>