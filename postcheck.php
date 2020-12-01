<?php
$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];
$pw = $_POST['pwd'];
$date = date('Y-m-d H:i:s');

if($name==NULL||$title==NULL||$content==NULL||$pw==NULL){
  echo "빈칸을 입력해주세요.";
  echo "<a href=post.php>다시 글 작성하기</a>";
  exit();
}

$con=mysqli_connect("localhost","root","kitty0809","webstudy") or die("mysql connect error");
$upload=mysqli_query($con,"insert into board(num, title, content, id, pwd, date, hit)
values(null,'$title','$content','$name','$pw','$date',0)");

if($upload){
  echo "업로드에 성공하였습니다.";
  echo "<a href=list.php>글 목록으로</a>";
}
else{
  echo "업로드에 실패하였습니다.";
  echo "<a href=post.php>다시 글 작성하기</a>";
}
mysqli_close($con);

?>
