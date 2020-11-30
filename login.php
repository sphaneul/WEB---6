<?php session_start();?>//로그인 폼
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="check.php">
            <p>아이디: <input type="text" name="id" /></p>
            <p>비밀번호: <input type="password" name="pw" /></p>
            <p><input type="submit" value="로그인" onclick="location.href='check.php'" /></p>//로그인 버튼을 누르면 check.php로 이동
            <p><input type="button" value="회원가입" onclick="location.href='signup.html'"/></p>
            //회원가입 버튼을 누르면 signup.html로 이동
        </form>
    </body>
</html>
