<?php

session_start();
include("./login/functions.php");
check_session_id();

$money = $_SESSION["money"];
?>

<!DOCTYPE html>
<html lang="ja">
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>引き換え完了しました</title>

    <link rel="stylesheet" href="css/cart_style.css" media="screen" title="no title" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <meta name="robots" content="noindex,follow" />
</head>

<body>
    <div class="content">
        <h1 class="content_title scroll-fade">クーポン引き換え</h1>
        <div class="content_box shopping-cart scroll-fade">
            <!-- Title -->
            <h2>クーポンの引き換えが完了しました。</h2>
            <div class="title">
                残り所持ポイント <?php echo $money ?> pt
            </div>

    <button class="button" type="submit" onclick="location.href='dist/index.php'">TOPへ戻る</button>

    <script type="text/javascript" src="js/cart.js"></script>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>