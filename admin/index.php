<?php
session_start();
$_SESSION['state'] = "login";
$auth = $_SESSION['id'];
if(isset($auth)){
    echo "<script>location.href='/admin/home/'</script>";
} else {
    echo "<script>location.href='/admin/screen/login'</script>";
}
?>