<table class="table-content">
    <thead>
        <tr>
            <th>Admin Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Admin Type</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        <!--    =================================
                            code section
                            ================================= -->
        <?php

        $select_admins = "SELECT * FROM max_admin";
        $process_query = mysqli_query($connect_to, $select_admins);

        while ($result = mysqli_fetch_array($process_query)) {
        ?>
            <tr>
                <td><?php echo $result["admin_email"] ?></td>
                <td><?php echo $result["Admin_fname"] ?></td>
                <td><?php echo $result["Admin_lname"] ?></td>
                <td><?php echo $result["Admin_phone"] ?></td>
                <td><?php echo $result["Admin_type"] ?></td>
                <td><?php echo $result["admin_password"] ?></td>
            </tr>
        <?php
        }
        ?>
        <!--    =================================
                            code section
                            ================================= -->

    </tbody>
</table>