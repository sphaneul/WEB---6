<?php
$con=mysqli_connect("localhost","root","kitty0809","webstudy");
$number = $_GET['num'];
session_start();
$query = "select title, content, date, hit, id from board where num=$number";
$result = mysqli_query($con, $query) or die("query error");
$row = mysqli_fetch_array($result);
$plus=mysqli_query($con,"update board set hit = hit+1 where num like $number");
?>
<table class="view_table" align=center>
  <tr>
    <td align=center colspan="4" class="view_title"><?php echo $row['title']?></td>
  </tr>
  <tr>
    <td class="view_id">작성자</td>
    <td class="view_id2"><?php echo $row['id']?></td>
    <td class="view_hit">조회수</td>
    <td class="view_hit2"><?php echo $row['hit']?></td>
  </tr>
  <tr>
    <td colspan="4" class="view_content" valign="top">
      <?php echo $row['content']?></td>
    </tr>
  </table>
  <div style="text-align: center">
    <input type="button" align="center" name="list" value="목록으로" onclick="location.href='list.php'">
    <input type="button" name="index" value="메인화면" onclick="location.href='index.php'">
  </div>
