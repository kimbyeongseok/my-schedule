<meta charset="utf-8">
<?php
$pt_title=$_POST['inputTit'];
$pt_contents=$_POST['inputCon'];
$regist_day=date("Y-m-d");
$pt_title=htmlspecialchars($pt_title, ENT_QUOTES);
$pt_contents=htmlspecialchars($pt_contents, ENT_QUOTES);

$con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
$sql="insert into pf_contents (pt_title, pt_contents, regist_day) values('$pt_title','$pt_contents','$regist_day')";
mysqli_query($con, $sql);

echo "
  <script>
    alert('입력 완료!! 홈으로 이동합니다.');
    location.href='../index.php';
    </script>
";
?>
