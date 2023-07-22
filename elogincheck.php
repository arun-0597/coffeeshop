<?php
    session_start();
    include("dbconfig.php");
    $email = $_POST['lemail'];
    $pass = md5($_POST['lpass']);
    $sql = "select * from eregister where eemail='$email' and epass='$pass'";
    $res = mysqli_query($conn,$sql);
    $totaluser = mysqli_num_rows($res);
    if($totaluser == 1)
    {
        $userinfo = mysqli_fetch_object($res);
        $_SESSION['id']=$userinfo->eid;
        $_SESSION['name']=$userinfo->ename;
        header("location:eprofile.php");
    }else{
        $_SESSION['msg']="<p class='alert alert-danger'>Error :- Email or password incorrect</p>";
        header("location:elogin.php");
    }
?>