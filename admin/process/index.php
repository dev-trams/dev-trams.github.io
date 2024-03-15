<?php
include "../../process/conn.php";

$variable = $_POST['mode'];
echo "$variable 프로세스 시작"."<br>";
switch ($variable) {
    case 'login':
        echo "로그인 시도"."<br>";
        # code...
        $localId = $_POST['id'];
        $localPwd = $_POST['password'];
        
        $sql = "select * from userTbl where id ='$localId' AND uid = '$localPwd'";
        
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);
        if($row > 0) {
            session_start();
            $_SESSION['id'] = $row["id"];    
            $_SESSION['grant'] = $row["grant"];
            // header("Localtion: ../home/");
            echo "<script>location.href='../home/'</script>";
        } else {
            echo "로그인 실패"."<br>";
        }
    break;
    case 'logout':
        session_start();
        session_destroy();
        echo "<script>location.href='https://jvak.ctrls-studio.com'</script>";
    break;
    case 'insert':
        # code...
        switch ($type) {
            case 'song':
                # code...
                $sid = $_COOKIE['sid'];
                $scode = $_COOKIE['scode'];
                $title = $_COOKIE['title'];
                $singer = $_COOKIE['singer'];
                $animTitle = $_COOKIE['animTitle'];
                $animCategory = $_COOKIE['animCategory'];
                $animStage = $_COOKIE['animStage'];
                $number = $_COOKIE['number'];
                
                $sql = "insert into musicTbl values('$sid', '$scode', '$title', '$singer', '$animTitle', '$animCategory', '$animStage', '$number')";
                mysqli_query($conn, $sql);
                
                break;
            case 'user':
                # code...
            break;
            case 'bookmark':
                # code...
            break;
            default:
                # code...
                break;
        }
    break;
    case 'modify':
        # code...
        switch ($type) {
            case 'song':
                # code...
                break;
            case 'user':
                # code...
            break;
            case 'bookmark':
                # code...
            break;
            default:
                # code...
                break;
        }
    break;
    case 'remove':
        switch ($type) {
            case 'song':
                # code...
                break;
            case 'user':
                # code...
            break;
            case 'bookmark':
                # code...
            break;
            default:
                # code...
                break;
        }
    break;
    default:
        # code...
        break;
}
?>