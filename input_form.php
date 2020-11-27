<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-flux data insert</title>
    <style>
    .table {
        float: left;
    }

    .wrap {
        width: 80%;
        margin: auto;
    }

    li {
        list-style: none;
        padding: 10px 0;
    }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="table table_1">
            <h1>Insert Table 1</h1>
            <form action="php/project_input.php" method="post" name="eflux_data" enctype="multipart/form-data">
                <li>
                    <input type="text" name="main" placeholder="tag">
                </li>
                <li>
                    <input type="text" name="db" placeholder="sub_text">
                </li>
                <li>
                    <input type="text" name="api" placeholder="title">
                </li>
                <li>
                    <input type="text" name="uiux" placeholder="title">
                </li>
                <li>
                    <input type="text" name="renewal1" placeholder="title">
                </li>
                <li>
                    <input type="text" name="renewal2" placeholder="title">
                </li>

                <li><input type="submit" value="Upload"></input>
                </li>
            </form>
        </div>
    </div>


</body>

</html>