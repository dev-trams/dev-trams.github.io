<?php
$servername = "ctrls-studio.com:3306"; // 데이터베이스 서버 주소
$username = "jvak"; // 데이터베이스 사용자 이름
$password = "jvak0422"; // 데이터베이스 비밀번호
$dbname = "jvak"; // 사용할 데이터베이스 이름

// MySQLi 객체 생성 및 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// 연결 성공 시 추가적인 작업 수행 가능
?>
