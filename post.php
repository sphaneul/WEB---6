<!DOCTYPE html>
<html>
<head>
  <title>POST 작성</title>
  </head>
  <body>
    <h2 align=center>POST 작성</h2>
    <form name ='write' method="POST" action="postcheck.php">
      <table align=center class = "table2">
        <tr>
        <td align=center>작성자</td>
        <td><input type = text name = name size=20> </td>
        </tr>

        <tr>
        <td align=center>제목</td>
        <td><input type = text name = title size=70></td>
        </tr>

        <tr>
        <td align=center>내용</td>
        <td><textarea name = content cols=70 rows=20></textarea></td>
        </tr>

        <tr>
        <td align=center>비밀번호 </td>
        <td><input type = password name = pwd size=10 maxlength=10></td>
        </tr>
        </table>

      <div style="text-align: center">
        <input type="submit" name="upload" value="게시" onclick="location.href='postcheck.php'">
      </div>
  </form>
 </body>
</html>
