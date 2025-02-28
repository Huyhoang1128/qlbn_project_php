<?php
    $sql="Select * from patients where id='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
?>