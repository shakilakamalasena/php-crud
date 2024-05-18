<?php
    include 'connect.php';
    if (isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $sql = "delete from `crud` where id = $id";
        $reslut = mysqli_query($connect, $sql);
        if ($reslut) {
            // echo "Deleted successfully";
            header('location:display.php');
        } else {
            die(mysqli_error($connect));
        }
    }
?>