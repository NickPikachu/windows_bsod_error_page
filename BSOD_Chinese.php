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
            <p style="font-size:20pt; margin:0; padding:0">网页访问遇到问题，需要刷新。<br>可能是服务器存在故障或访问受阻，请等待。</p>
            <br>稍后将刷新网页<br><br>
            <img src="https://www.helloimg.com/i/2024/12/11/6758d9508a779.png" style="float:left;">
            <div style="float:left;margin-left:30px;width:65%;">
                <p style="font-size:14pt; color:#fff; margin-top:-30px; padding:0;line-height:32px;">
                    <br>如果致电支持人员，请向他们提供以下信息：<br>
                    PHP版本：<?php echo PHP_VERSION; ?><br><br>
                    已安装的PHP扩展：<br>
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
