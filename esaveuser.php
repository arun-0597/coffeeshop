<?php
    session_start();
    include("dbconfig.php");
    $name = $_POST['name'];
    $mobile = $_POST['tel'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $sql = "insert into eregister(ename,emobile,eemail,epass) values('$name','$mobile','$email','$pass')";
    $status = mysqli_query($conn,$sql);
    if($status==true){
        $_SESSION['msg'] = "<p class='alert alert-success'>Successfully registered</p>";
        header("Location:elogin.php");
    }else{
        $_SESSION['msg'] = "<p class='alert alert-danger'>Error :- Email already exist</p>";
        header("Location:esignup.php");
    }
?>