<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>انتقال دهنده لینک</title>
        <meta name="keywords" content="انتقال دهنده لینک,اسکریپت لینک,اسکریپت انتقال دهنده,اسکریپت منتقل کننده">
        <meta name="description" content="یک اسکریپت ساده برای انتقال لینک">
        <meta http-equiv="refresh" content="5;URL=<?php $url = $_GET['url'];echo "$url"; ?>">
        <link href="assets/img/favicon.png" rel="shortcut icon">
        <link rel="stylesheet" href="assets/css/style.css" media="all">
    </head>
    <body>
        <a title="انتقال دهنده لینک" href="index.php">
            <div class="logo"></div>
        </a>
        <div id="redirectpage">
            <h1>انتقال دهنده لینک</h1>
            <h2>شما در حال انتقال به صفحه جدید هستید.</h2>
            <p>در صورتی که تا 5 ثانیه به صفحه جدید منتقل نشدید روی دکمه پایین کلیک کنید</p>
            <p>
                <a class="redirectme" href="<?php $url = $_GET['url'];echo "$url"; ?>">
                    <span class="shuffle"></span>کلیک کنید
                </a>
            </p>
        </div>
    </body>
</html>