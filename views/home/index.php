<!DOCTYPE html>
<html lang="en">

<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head> -->
<?php
    addHead("Patient Management");
?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>
</html>