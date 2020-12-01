<!-- 리스트 게시판 시작-->
<!DOCTYPE>
<table class="sub_news" border="1" cellspacing="0" summary="게시판의 글제목 리스트">
<h2 align=center>게시판 리스트</h2>
<colgroup>
<col width="50">
<col width="500">
<col width="100">
<col width="200">
<col width="60">
</colgroup>
<thead>
<tr>
<th scope="col">번호</th>
<th scope="col">제목</th>
<th scope="col">글쓴이</th>
<th scope="col">날짜</th>
<th scope="col">조회수</th>
</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect("localhost","root","kitty0809","webstudy") or die("mysql connect error");
$query="select * from board order by num desc";
$result=mysqli_query($con,$query) or die("query error");
$count=mysqli_num_rows($result);?>

<tbody>
        <?php
                while($row = mysqli_fetch_assoc($result)){ //DB에 저장된 데이터 수 (열 기준)
                        if($count%2==0){
        ?>                      <tr class = "even">
                        <?php   }
                        else{
        ?>                      <tr>
                        <?php } ?>
<td align=center><?php echo $row['num']?></td>
<td>
<a href="view.php?num=<?php echo $row['num']?>"><?php echo $row['title']?></td>
<td class "name"><?php echo $row['id']?></td>
<td><?php echo $row['date']?></td>
<td><?php echo $row['hit']?></td>
</tr>
<?php
$count--;
 }
   ?>
</tbody>
</table>
<!-- 리스트 게시판 끝-->
<div style="text-align: center">
  <input type="button" name="write" value="글쓰기" onclick="location.href='post.php'";/>
  <input type="button" name="index" value="메인화면" onclick="location.href='index.php'">
</div>

</body>
</html>
