<!DOCTYPE html>
<html>
<head>
  <meta charset = 'utf-8'>
  <title>Board</title>
</head>
<?php
$con=mysqli_connect("localhost","root","kitty0809","webstudy")or die("mysql connect error");
$query="select * from board";
$result=mysqli_query($con,$query) or die("query error");
$count=mysqli_num_rows($result);
 ?>
<h2 align=center>게시판</h2>
<table align=center>
  <thead align="center">
  <tr>
    <td width="50" align="center" bgcolor="#ccccc">번호</td>
    <td width="500" align="center" bgcolor="#ccccc">제목</td>
    <td width="100" align="center" bgcolor="#ccccc">작성자</td>
    <td width="200" align="center" bgcolor="#ccccc">날짜</td>
    <td width="50" align="center" bgcolor="#ccccc">조회수</td>
  </tr>
</thead>
<tbody>
  <?php
  while($row=mysqli_fetch_array($result)){
    if($count%2==0){
      ?><tr class="even">
        <?php}
        else{
          ?><tr>
            <?php}?>
    <td width="50" align="center"><?php echo $count?></td>
    <td width="500" align="center">
    <a href="view.php?num=<?php echo $rows['num']?>">
    <?php echo $rows['title']?></td>
    <td width="100" align="center"><?php echo $row['id']?></td>
    <td width="200" align="center"><?php echo $row['date']?></td>
    <td width="50" align="center"><?php echo $row['hit']?></td>
    </tr>
    <?php
    $count--;
  }
    ?>
  </tbody>
</table>
<div style="text-align: center">
  <input type="button" name="write" value="글쓰기" onclick="location.href='post.php'">
</div>

</body>
</html>
