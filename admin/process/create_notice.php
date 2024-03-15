<?php
    include '../../process/conn.php';
    $header = $_POST["header"];
    $comment = $_POST["comment"];
    if(isset($header) && isset($comment)){
        $query = "insert into noticeTbl (header, comment) values ('$header', '$comment')";
        $result = $conn->query($query);
        
        if ($result) {
            echo "<p>전송 성공</p>";
            echo "<script>location.href='../../screen/notice.php'</script>";
        } else {
            echo '<p>데이터 전송 실패</p>';
            echo $conn->error;
        }
    } else {
        echo "데이터가 비어있습니다.";
    }
    $conn->close();
?>