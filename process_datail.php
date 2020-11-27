<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Schedule</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/media.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="background"></div>
    <div class="wrap process">
        <header>
            <div class="center clear subPage">
                <div class="close_icon">
                    <a href="index.php">
                        <img src="https://www.e-flux.com/elements/close.svg" alt="">
                    </a>
                </div>
                <h2>Portfolio Schedules</h2>
            </div>
        </header>
        <section class="main detail">
            <div class="center">
                <div class="totalProgress">
                    <div class="totalTit">
                        <h2>전체 진행률</h2>
                    </div>
                    <div class="totalBar">
                        <span></span>
                    </div>
                </div>

                <?php
        $num=$_GET['num'];

        $con=mysqli_connect("localhost", "tmxlraos","","tmxlraos");
        $sql="select * from pf_contents where num=$num";

        $result=mysqli_query($con, $sql);
        $row=mysqli_fetch_array($result);

        $title=$row['pt_title'];
        $contents=$row['pt_contents'];
        $year=$row['regist_year'];
        $today=$row['regist_day'];

        $contents_br=strip_tags($contents);
        ?>

                <div class="processTitle">
                    <h1><?=$today?> 진행 상황</h1>
                </div>

                <form action="php/update_detail.php?num=<?=$num?>" method="post">
                    <h2 class="detailTit">주요 내용 : <?=$title?></h2>
                    <h2 class="detailTit titleBox clear">
                        <b>주요 내용 :</b>
                        <textarea class="updateTitle" name="updateTit"><?=$title?></textarea>
                    </h2>
                    <div class="workList" id="workList">
                        <p class="workTitle clear">
                            <span class="num">번호</span>
                            <span class="contents">내용</span>
                            <span class="date">작성일</span>
                        </p>

                        <p class="workContents clear">
                            <span class="num"><?=$num?></span>
                            <span class="contents">
                                <em class="updateCon"><?=$contents?></em>
                                <textarea class="updateCon" name="updateCon"><?=$contents_br?></textarea>
                            </span>
                            <span class="date"><?=$today?></span>
                        </p>
                    </div>
                    <div class="update">
                        <button type="button" class="btn updateDetail">수정</button>
                        <button type="submit" class="btn updateSubmit">제출</button>
                    </div>
                </form>
            </div><!-- end of center tag-->
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js?v=<?php echo time(); ?>">
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js?v=<?php echo time(); ?>">
    </script>
    <script src="plugIn/Counter-Up-master/jquery.counterup.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/custom.js?v=<?php echo time(); ?>"></script>
    <script src="js/detail.js?v=<?php echo time(); ?>"></script>

</body>

</html>
