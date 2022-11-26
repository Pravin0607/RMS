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
        <h3>Welcome Manager</h3>
        <h4>userid :  <?php echo $_SESSION['userid'] ?></h4>
        <h4>name   :  <?php echo $_SESSION['fname'] ?></h4>
        <h4>lname  :  <?php echo $_SESSION['lname'] ?></h4>
        <h4>role   :  <?php echo $_SESSION['role'] ?></h4>
        <a href="../config/logout.php"><button>Log Out</button></a>
    </center>
</body>
</html>