<?php session_start();//첫 화면, 세션정보가 없으면 로그인 페이지로 이동, 있으면 메인화면 등장
if(!isset($_SESSION['id'])) {
    header('location: login.php');}?>

<!DOCTYPE html>
<html>
<head>
  <title>INDEX</title>
</head>

<body>
  <h1>SKYWEB</h1>
<?php
$id = $_SESSION['id'];
echo "$id 님 환영합니다.";
        ?>
        <form>
        <input type="button" name="write" value="글쓰기" onclick="location.href='post.php'">
        <input type="button" name="list" value="글목록" onclick="location.href='list.php'">
        <input type="button" name="logout" value="로그아웃" onclick="location.href='logout.php'">
</form>
</body>
</html>
