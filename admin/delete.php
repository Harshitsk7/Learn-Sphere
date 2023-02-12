<?php

if(isset($_POST['user_id'])) {
    // Connect to the database
    include_once "../config/configure.php";

    // Get the user ID from the form
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    // Delete the user from the database
    $query = "DELETE FROM users WHERE user_id = '$user_id'";
    mysqli_query($con, $query);

    // Close the database connection
    mysqli_close($con);

    // Redirect to the admin page
    header("Location: remove_users.php");
}

?>
