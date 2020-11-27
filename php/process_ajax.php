<?php
$page=$_REQUEST["page"];
if($page==""){
    $page=1;
}
$from=($page-1)*6;

    $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
    $sql="select * from pf_contents order by num desc limit $from, 6";
    $result=mysqli_query($con, $sql);
   
?>
<p class="workTitle clear">
    <span class="num">번호</span>
    <span class="contents">내용</span>
    <span class="date">작성일</span>
</p>
<?php
 while($row=mysqli_fetch_array($result)){
    $num=$row['num'];
    $pt_title=$row['pt_title'];
    $pt_contents=$row['pt_contents'];
    $regist_day=$row["regist_day"]
?>
<p class="workContents clear">
    <span class="num"><?=$num?></span>
    <span class="contents"><a href="process_datail.php?num=<?=$num?>"><?=$pt_title?></a></span>
    <span class="date"><em><?=substr($regist_day,0,4);?>-</em><?=substr($regist_day,5,12);?></span>
</p>
<?php
                                    }
                                    ?>
