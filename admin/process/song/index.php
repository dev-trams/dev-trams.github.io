<!DOCTYPE html>
<html>
<head>
    <title>데이터 입력</title>
    <!-- Bootstrap 링크 추가 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<?php
function generateSongNumber() {
    $date = date('Ymd'); // 현재 날짜 (예: 20230608)
    $suffix = generateRandomString(4); // 4자리의 랜덤 문자열 생성

    $songNumber = $date . $suffix; // 예: 2023060835h7
    return $songNumber;
}

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$songNumber = generateSongNumber();
echo $songNumber;
$type = $_POST['type'];
echo $type;

?>
<body>
        <div class="container">
            <h1>데이터 관리</h1>
            <form action="process.php" method="POST">
            <div class="form-group">
                <label>작업 선택</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="action" id="inputAction" value="input" required disabled <?php if($type === "insert") echo "checked"; ?>>
                    <label class="form-check-label" for="inputAction">입력</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="action" id="editAction" value="edit" required disabled <?php if($type === "modify") echo "checked"; ?>>
                    <label class="form-check-label" for="editAction">수정</label>
                </div>
            </div>
                <div class="form-group">
                    <label for="songNumber">노래관리번호 (자동발생)</label>
                    <input type="text" class="form-control" id="songNumber" name="songNumber" placeholder="예) 20230608v3N8" value="<?php echo $songNumber;?>" readonly>
                </div>
                <div class="form-group">
                    <label for="company">회사</label>
                    <select class="form-control" id="company" name="company">
                        <option value="KY">KY</option>
                        <option value="TJ">TJ</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">제목</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="제목 입력" required>
                </div>
                <div class="form-group">
                    <label for="genre">가수</label>
                    <input type="text" class="form-control" id="genre" name="genre" placeholder="가수 입력" required>
                </div>
                <div class="form-group">
                    <label for="animeTitle">애니메이션 제목</label>
                    <input type="text" class="form-control" id="animeTitle" name="animeTitle" placeholder="애니메이션 제목 입력" required>
                </div>
                <div class="form-group">
                    <label for="animeEpisode">애니메이션 기수</label>
                    <input type="text" class="form-control" id="animeEpisode" name="animeEpisode" placeholder="애니메이션 기수 입력" required>
                </div>
                <div class="form-group">
                    <label for="songType">애니메이션 구분</label>
                    <select class="form-control" id="songType" name="songType">
                        <option value="OP">OP</option>
                        <option value="ED">ED</option>
                        <option value="OST">OST</option>
                        <option value="캐릭터송">캐릭터송</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="songNumber">노래 번호</label>
                    <input type="text" class="form-control" id="songNumber" name="songNumber" placeholder="노래 번호 입력" required>
                </div>
                <button type="submit" class="btn btn-primary">데이터 제출</button>
            </form>
        </div>

        <!-- Bootstrap 스크립트 링크 추가 -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
<?php
echo $type;
session_start();
switch ($type) {
    case 'remove':
        $_SESSION['mode'] = "remove";
        header("Location: process/");
            # code...
        break;
    default:
        # code...
        echo "ffx";
        break;
}
?>
</html>
