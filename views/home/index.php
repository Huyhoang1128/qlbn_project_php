<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <th scope="row"><?=$patient->getId();?></th>
                    <td><?=$patient->getFullName();?></td>
                    <td><?=$patient->getGender();?></td>
                    <td>
                        <!-- <a href="">Edit</a> -->
                        <a href="<?= DOMAIN.'/app/views/patient/edit.php?id='.$patient->getId()?>">
                            <i class="bi bi-pencil-square"></i>
                    </td>
                    <td>
                        <!-- <a href="">Delete</a> -->
                        <a href="<?= DOMAIN.'/app/views/patient/delete.php?id='.$patient->getId()?>">
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