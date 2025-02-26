<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge" name="viewport">
    <title>Hospital Management</title>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success mt-3 mb-3">Hospital Management</h3>
        <a class="create" href="index.php?page=home&action=create">Add patient</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($patients as $patient){
                ?>
                <tr>
                    <td scope="row"><?php echo $patient['id']?></td>
                    <td><?php echo $patient['name']?></td>
                    <td><?php echo $patient['gender']?></td>
                    <td>
                        <a href="index.php?page=Patient$action=edit&item=<?php echo $patient['id']?>">Edit</a>
                            <i class="bi bi-pencil-square"></i>
                    </td>
                    <td>
                        <a href="index.php?page=Patient$action=delete&item=<?php echo $patient['id']?>">Edit</a>
                            <i class="bi bi-trash-fill"></i>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>


</body>
</html>