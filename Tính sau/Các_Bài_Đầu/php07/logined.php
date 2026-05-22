<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logined</title>
</head>

<body>
    <?php
    echo '<h2>bạn đã đăng nhập thành công với:</h2>
            <h3>Username: ' . $_SESSION['use'][0] . '</h3>
            <h3>Password: ' . $_SESSION['use'][1] . '</h3>';
    ?>
</body>

</html>