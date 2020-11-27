<meta charset="utf-8">
<?php
  $num=$_GET['num'];
  $main=$_POST['main'];
  $db=$_POST['db'];
  $api=$_POST['api'];
  $uiux=$_POST['uiux'];
  $renewal1=$_POST['renewal1'];
  $renewal2=$_POST['renewal2'];

  $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
  $sql="update portfolio_process set main=$main, db=$db, api=$api, uiux=$uiux, renewal1=$renewal1, renewal2=$renewal2 where num=$num";

  mysqli_query($con, $sql);

  $sql="select * from portfolio_process where num=$num";

  $result=mysqli_query($con, $sql);

  $arr=array();
  //$row=mysqli_fetch_array($result);

  while($row=mysqli_fetch_array($result)){

    array_push($arr, array(
      'main' => $row['main'],
      'db' => $row['db'],
      'api' => $row['api'],
      'uiux' => $row['uiux'],
      'renewal1' => $row['renewal1'],
      'renewal2' => $row['renewal2']
    ));

  }

  file_put_contents("../data/pf.json", json_encode($arr, JSON_PRETTY_PRINT));

  mysqli_close($con);

  echo "
    <script>
      alert('수정이 완료되었습니다!');
      location.href='../index.php';
    </script>
  ";
?>
