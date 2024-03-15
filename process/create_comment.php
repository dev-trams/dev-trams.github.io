<?php
    include 'conn.php';
    $header = $_POST['header'];
    $comment = $_POST['comment'];

    if(isset($header) && isset($comment)){

        $sql = "insert into commentTbl (header, comment) values ('$header', '$comment')";
        $result = $conn -> query($sql);

        if($result) {
            echo "<p> 의견 발송 완료 </p>";
            echo "<script>alert('소중한 의견은 CTRLS 개발팀으로 발송되었습니다. \n 소중한 의견을 주셔서 감사합니다.);</script>";
            echo "<script>location.href='../screen/sendComment.html'</script>";
        } else {
            echo "<script>alert('의견이 제대로 전달되지 않았습니다. 개발자에게 문의해주세요 @~@')</script>";
            echo "<p> 의견이 제대로 전달되지 않았습니다. 개발자에게 문의해주세요 @~@";
            echo $conn->error;
            echo "<buttom src='../sendComment.html'>다시 작성해보기</buttom>";
        }

    } else {
        echo '<p> 데이터가 제대로 받아오지 않았습니다. 개발자에게 문의해 주시길 바랍니다.</p>';
    }

?>
