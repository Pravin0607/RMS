<?php
include("../config/essential.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Manager</title>
</head>
<body>
    <center>
        <h3>Welcome <b><?php echo $_SESSION['fname'] ?></b></h3>
        <a href="../config/logout.php"><button>Log Out</button></a>
    </center>
</body>
</html>