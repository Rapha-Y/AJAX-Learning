<?php
    $conn = mysqli_connect("localhost", "root", "password", "ajax_crash_course");

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($users);
?>