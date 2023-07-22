<?php 
    session_start();
    $eid = $_SESSION['id'];
    include("dbconfig.php");
    $ename = $_POST['ename'];
    $emobile = $_POST['emobile'];
    $eemail = $_POST['eemail'];
    $eage = $_POST['eage'];
    $edob = $_POST['edob'];
    $egen = $_POST['egen'];
	$ecity = $_POST['ecity'];
    $estate = $_POST['estate'];
    $enation = $_POST['enation'];
    $emstatus = $_POST['emstatus'];
    $eeduqul = $_POST['eeduqul'];
    $eyoj = $_POST['eyoj'];
    $eexp = $_POST['eexp'];
    
    $eimg = time()."-".$_FILES['eimg']['name'];
    $etmpimg = $_FILES['eimg']['tmp_name'];
    move_uploaded_file($etmpimg,"image/dont-delete/$eimg");
    $sql = "update eregister set ename='$ename',emobile='$emobile',eemail='$eemail',eage='$eage',edob='$edob',egender='$egen',ecity='$ecity',estate='$estate',enation='$enation',emstatus='$emstatus',eeduqul='$eeduqul',eyoj='$eyoj',eexp='$eexp',eimg='$eimg' where eid='$eid'";
    $res = mysqli_query($conn,$sql);
    if($res==true)
    {
    header("location:eeditprofile.php");
    $_SESSION['upmsg'] = "<h2 class='alert alert-success'>Successfully Updated...</h2>";
    }else{
    header("location:eeditprofile.php");
    $_SESSION['upmsg'] = "<h2 class='alert alert-success'>Email Id is already exist please change the email and try again...</h2>";
    }
?>