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
        <section class="main">
            <div class="center process">
                <div class="processTitle">
                    <h1>금일 진행 상황</h1>
                </div>
                <form action="php/process_input.php" method="post">
                    <div class="inputBox">
                        <div class="inputTitle">
                            <textarea placeholder="상황 요약" name="inputTit"></textarea>
                        </div>
                        <div class="inputContents">
                            <textarea placeholder="세부 내용" name="inputCon"></textarea>
                        </div>
                        <div class="update">
                            <input type="submit" class="btn" value="Upload"></input>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js?v=<?php echo time(); ?>">
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js?v=<?php echo time(); ?>">
    </script>
    <script src="plugIn/Counter-Up-master/jquery.counterup.min.js?v=<?php echo time(); ?>"></script>
    <script src="js/custom.js?v=<?php echo time(); ?>"></script>

</body>

</html>