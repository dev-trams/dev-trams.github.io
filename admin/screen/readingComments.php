<?php include '../../process/conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>문의사항 | JVAK | CTRLS-STUDIO</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4"><center>문의사항</center></h1>
        <hr>
        <div class="card-deck">
            <?php
            // 공지사항 데이터베이스 조회 쿼리 실행
            $query = "SELECT * FROM commentTbl order by num desc";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                // 각 공지사항을 카드로 표시
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">' . $row["header"] . '</h5>
                                <h6 class="card-subtitle text-muted">' . $row["uptime"] . '</h6>
                                <p class="card-text">' . $row["comment"] . '</p>
                            </div>
                        </div>';
                }
            } else {
                echo '<p>문의사항이 없습니다.</p>';
            }
            ?>
        </div>
    </div>
</body>
<?php $conn->close() ?>
<script src="../js/user-scripts.js"></script>
</html>
