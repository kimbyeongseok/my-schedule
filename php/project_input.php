<meta charset="utf-8">
<?php
$main=$_POST['main'];
$db=$_POST['db'];
$api=$_POST['api'];
$uiux=$_POST['uiux'];
$renewal1=$_POST['renewal1'];
$renewal2=$_POST['renewal2'];


$con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
$sql="insert into portfolio_process (main, db, api, uiux, renewal1, renewal2) values('$main','$db', '$api', '$uiux','$renewal1','$renewal2')";
mysqli_query($con, $sql);

echo "
  <script>
    alert('입력 완료!!');
    location.href='input_form.php';
    </script>
";

?>
