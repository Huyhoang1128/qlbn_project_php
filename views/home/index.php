<?php 
    include 'config/connection.php';
    include 'header.php';  
?>
    <script src="assets/js/script.js"></script>
    <h3 class="text-center text-uppercase text-success mt-3 mb-3">Hospital Management</h3>
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