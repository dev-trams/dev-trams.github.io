<?php
session_start();
$grant = $_SESSION['grant'];
$localhost = "admin";

if(!($grant === $localhost)) {
    echo "<script>alert('허가되지 않은 접근입니다. 다시 시도해주시길 바랍니다.');</script>";
   //  echo "<script>alert('debug:$id');</script>";
    echo "<script>location.href='/admin/'</script>";
}
?>