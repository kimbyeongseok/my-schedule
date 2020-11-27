<meta charset="utf-8">
<?php
  $num=$_GET['num'];
  $updateTit=nl2br($_POST['updateTit']);
  $updateCon=nl2br($_POST['updateCon']);

  $updateTit=addslashes($updateTit);
  $updateCon=addslashes($updateCon);

  $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
  $sql="update pf_contents set pt_title='$updateTit', pt_contents='$updateCon' where num=$num";

  mysqli_query($con, $sql);

  echo "
    <script>
      alert('수정이 완료되었습니다!');
      location.href='../index.php';
    </script>
  ";
?>
