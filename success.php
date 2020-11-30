<?php $id = $_GET['userid'];
$pw = $_GET['userpw'];
$pwa = $_GET['userpw_a'];
$name = $_GET['username'];
$gender = $_GET['usergender'];
$email = $_GET['useremail'];

if($pw!=$pwa) //비밀번호와 비밀번호 확인이 일치하는지 검사
{
echo"비밀번호와 비밀번호 확인이 일치하지 않습니다.";
echo "<a href=signup.html>회원가입</a>";
exit();
}

if($id==NULL||$pw==NULL||$name==NULL||$email==NULL){
  echo "입력하지 않은 정보가 있습니다.";
  echo "<a href=signup.html>회원가입</a>";
  exit();
}

$con=mysqli_connect("localhost","root","kitty0809","webstudy") or die("mysql connect error");
$query="select * from member where id='$id'";
$result=mysqli_query($con,$query) or die("query error");
$count=mysqli_num_rows($result);
if($count==1){
  echo "중복된 ID입니다.";
  echo "<a href=signup.html>회원가입</a>";
  exit();
}

$signup=mysqli_query($con,"insert into member(id,pwd,name,email)
values('$id','$pw','$name','$email')");
if($signup){
  echo "회원이 되신 것을 환영합니다.";
  echo "<a href=login.php>로그인</a>";
}
?>
