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
?>
