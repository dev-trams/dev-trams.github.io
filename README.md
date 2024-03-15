# JVAK-IM-V2 develop note

## V2 버전 사양 
 - V2 경로 https://jvak.ctrls-studio.com
 - 코어 언어 html, php
 - style 언어 css, scss
 - style 프레임워크 bootstrap

> 2023-06-11 13:44
>> 1. dashboard에 music 테이블 확인 가능
>> 2. 노래, 유저, 북마크 등 민감한 정보를 관리하는 페이지로 보안 정책 강화
>> - 서버에 지정된 관리자(admin) 테그가 포함된 계정으로 로그인해야 접속이 가능
>> 3. 현재 런칭중인 JVAK의 각 INFO 기능 중 공지, 제안, 정보 탭의 정보 제공을 위해 웹앱 최적화
>>  - 공지 : 공지 작성 페이지는 위의 관리자(admin)계정으로 접속해야 하고 사용자에게는 공지 확인 페이지만 보임, 
     <br> 추후 공지 작성 시 앱에 알림이 발송되도록 개발 예정
>>  - 제안 : 제안 작성 제안은 누구나 접속이 가능하도록 제작
>>  - 개인정보 처리방침, 이용약관 추가