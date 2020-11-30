<?php session_start();//로그인이 정상적으로 잘 되었는지 확인해주는 페이지
$id=$_POST['id'];//ID, PW 변수
$pw=$_POST['pw'];
$con=mysqli_connect("localhost","root","kitty0809","webstudy");
//mysql연결

$query="SELECT * FROM member where id='$id'";
$result=mysqli_query($con, $query) or die("query error");
$count=mysqli_num_rows($result);

if($count==1){
  $row=mysqli_fetch_array($result);
  if($row['pwd']==$pw){
    $_SESSION['id']=$id;
    if(isset($_SESSION['id'])){
      header('location: ./index.php');
    }
    else{
      echo "세션이 만료되었습니다.";
    }
  }
  else{
    echo "아이디 혹은 비밀번호가 잘못되었습니다.";
  }
}
else{
  echo "로그인에 실패하였습니다.";
}
?>
