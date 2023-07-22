<?php
    session_start();
    include("dbconfig.php");
    $email = $_POST['lemail'];
    $pass = md5($_POST['lpass']);
    $sql = "select * from cregister where cemail='$email' and cpass='$pass'";
    $res = mysqli_query($conn,$sql);
    $totaluser = mysqli_num_rows($res);
    if($totaluser == 1)
    {
        $userinfo = mysqli_fetch_object($res);
        $_SESSION['id']=$userinfo->cid;
        $_SESSION['name']=$userinfo->cname;
        $_SESSION['welcome'] = "<h2 class='alert alert-info text-center'>"."<span>Welcome</span> ".$_SESSION['name']."</h2>";
        header("location:chome.php");
    }else{
        $_SESSION['msg']="<p class='alert alert-danger'>Error :- Email or password incorrect</p>";
        header("location:clogin.php");
    }
?>