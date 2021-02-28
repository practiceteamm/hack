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
    <title>購入画面</title>

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
            <div class="title">
                所持ポイント　<?php echo $money ?>　pt
            </div>

            <!-- Product #1 -->
            <div class="item">
                <div class="buttons">
                    <span class="delete-btn"></span>
                    <span class="like-btn"></span>
                </div>

                <div class="image">
                </div>

                <div class="description">
                    <span>クーポン券</span>
                </div>

                <div class="quantity">
                    <button class="plus-btn" type="button" name="button">
                        <img src="img/plus.svg" alt="" />
                    </button>
                    <input id="value" type="text" name="name" value="0">
                    <button class="minus-btn" type="button" name="button">
                        <img src="img/minus.svg" alt="" />
                    </button>
                </div>

                <div id="total-price" class="total-price">単価1000円</div>
            </div>
            <div class="total-wrapper">
                <div class="total-text">
                    <ul>
                        <li>合計金額:</li>
                        <li id="total" class="total"></li>
                        <li>円</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <button class="button" type="submit" onclick="location.href='#'">クーポン発行</button>

    <script type="text/javascript" src="js/cart.js"></script>
    <!-- フォント読み込み -->
    <script type="text/javascript" src="js/font.js"></script>
    <script src="js/animation.js"></script>
</body>

</html>