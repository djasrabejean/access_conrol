<?php
function get_user_FullName($serial_id, $connection)
{
    $query = "SELECT Full_Name, Username FROM Users WHERE User_ID=?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $serial_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $full_name, $username);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($full_name && $username) {
        return $full_name . ' '.'(' . $username.')';
    } else {
        return null; // Or any default value if no user found
    }
}

function get_user_userID($serial_id, $connection)
{
    return $serial_id;
}

function get_user_privilege($serial_id, $connection)
{
    $query = "SELECT Role FROM Users WHERE User_ID=?";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $serial_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $role);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    return $role;
}
?>
