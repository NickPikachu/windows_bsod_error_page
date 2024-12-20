<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>
    <style>
        body {
            cursor: none;
            font-family: "Segoe UI Light", "Segoe UI", Arial;
            font-weight: lighter;
        }

        .content {
            width: 700px;
            margin: 10% auto;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body bgcolor="#0086ac" scroll="no">
    <div class="content">
        <font size="4" color="#FFFFFF">
            <p style="font-size:100pt; margin:0; padding-bottom:20pt">:(</p>
            <p style="font-size:20pt; margin:0; padding:0">The webpage has a problem, need refresh.<br>There may be a server
            issue or access blockage, please wait.</p>
            <br>Webpage will be refreshed shortly<br><br>
            <img src="./qr.png" style="float:left;">
            <div style="float:left;margin-left:30px;width:65%;">
                <p style="font-size:14pt; color:#fff; margin-top:-30px; padding:0;line-height:32px;">
                    <br>If you call
                    a support person, give them this info:<br>
                    PHP version:<?php echo PHP_VERSION; ?><br><br>
                    PHP extensions:<br>
                    <ol>
                        <?php
                        foreach (get_loaded_extensions() as $extension) {
                            echo "<li>{$extension} = " . phpversion($extension) . "</li>";
                        }
                        ?>
                    </ol>
                </p>
            </div>
        </font>
    </div>
</body>

</html>
