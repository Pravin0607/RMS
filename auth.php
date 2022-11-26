<?php
include("./config/essential.php");
include("./config/db.php");
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql="select u.userid,u.fname,u.lname,r.role_name as role from users as u ,roles as r where (u.userid='$user' and u.pass='$pass') and (r.id=u.role_id)";
$result=$conn->query($sql);
if($result->num_rows>0)
{
    $row=$result->fetch_assoc();
    $_SESSION['userid']=ucfirst($row['userid']);
    $_SESSION['fname']=ucfirst($row['fname']);
    $_SESSION['lname']=ucfirst($row['lname']);
    $_SESSION['role']=ucfirst($row['role']);
    
    $role=strtoupper($row['role']);
    switch($role)
    {
        case "MANAGER":
            header("Location:/RMS/manager");
            break;
        case "WAITER":
            header("Location:/RMS/waiter");
            break;
        case "CHEF":
            header("location:/RMS/chef");
    }
}
else
{
    echo "<h4 class='alert alert-danger'>no user found</h4>";
}
$conn->close();
?>