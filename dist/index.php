<?php

// session_start();
// include("../login/functions.php");
// check_session_id();

$username = $_SESSION["username"];
$money = $_SESSION["money"];
// $money = (string) $money;
// var_dump($money);
// exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./main.css">
  <script src="./main.48b3db1d.js"></script>
</head>

<body>
  <!-- Header-->
  <header>
    <div class="container">
      <div class="logo">
        <h1>ようこそ<span><?php echo $username ?></span>さん</h1>
      </div>
      <!-- <div class="currentDetails">

        <div class="header-option">
          <i data-feather="clock"></i>
          <span>Deliver now</span>
        </div>
      </div> -->
      <div class="searchBar">
        <div class="header-option">
          <span>保有ポイント<?php echo $money ?></span>
        </div>
        <div id="qupon" class="header-option">
          <span>クーポン引き換え</span>
        </div>
        <div id="signin" class="header-option">
          <span>Log out</span>
        </div>
      </div>
    </div>
  </header>

  <!-- Options -->


  <!-- ここに挿入 -->
  <div>

  </div>

  <!-- Listing -->
  <div class="listings">
    <div class="container">
      <div class="header">
        <div class="header-title">
          <h2>参画店舗</h2>
          <span>食べて地域を元気に!</span>
        </div>
        <div class="header-viewOptions">
          <!-- <div class="viewAll">
            <span>View all</span>
          </div> -->
          <div class="viewMore">
            <span class="arrow circle left"><i data-feather="arrow-left"></i>
            </span>
            <span class="arrow circle right darker">
              <i data-feather="arrow-right"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="listings-grid">
        <div class="listings-col">
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1562967914-01efa7e87832?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2252&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>串カツ屋 カツ太郎</h3>
                <div class="info">
                  <!-- <span>£4.99 delivery fee | 20-30 MINS | £</span> -->
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">福島 | 会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1301&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>満腹バーガー</h3>
                <div class="info">
                  <!-- <span>£4.99 delivery fee | 20-30 MINS | £</span> -->
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">福島 | 会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1532636875304-0c89119d9b4d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>ケバブーブ</h3>
                <div class="info">
                  <!-- <span>£4.99 delivery fee | 20-30 MINS | £</span> -->
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">福島 | 会津</span>
            </div>
          </div>
        </div>
        <div class="listings-col">
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>もう限界だよサラダ</h3>
                <div class="info">
                  <!-- <span>£4.99 delivery fee | 20-30 MINS | £</span> -->
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">福島 | 会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>ピッツァ太郎</h3>
                <div class="info">

                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">福島 | 会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>サラダ王</h3>
                <div class="info">
                  <!-- <span>£4.99 delivery fee | 20-30 MINS | £</span> -->
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">福島 | 会津</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Listing -->
  <div class="listings">
    <div class="container">
      <div class="header">
        <div class="header-title">
          <h2>プロジェクト一覧</h2>
          <span>会津から世界への第一歩を一緒に応援しよう</span>
        </div>
        <div class="header-viewOptions">
          <!-- <div class="viewAll">
            <span>View all</span>
          </div> -->
          <div class="viewMore">
            <span class="arrow circle left"><i data-feather="arrow-left"></i>
            </span>
            <span class="arrow circle right darker">
              <i data-feather="arrow-right"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="listings-grid">
        <div class="listings-col">
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/nonbe.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>会津呑んべえ文化支援プロジェクト</h3>
                <div class="info">
                  <span>お客様が減少した夜の街なかの活気を取り戻す</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/agabeko.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>あいづあかべこプロジェクト</h3>
                <div class="info">
                  <span>「赤べこ」をシンボルとし、地域や観光業界を活性化</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/art.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>Aizu Art Project</h3>
                <div class="info">
                  <span>あいずまちなかアートプロジェクト</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
        </div>
        <div class="listings-col">
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/student.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>会津★夢☆発見プロジェクト</h3>
                <div class="info">
                  <span>高校生の部</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/aizu.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>極上の会津プロジェクト</h3>
                <div class="info">
                  <span>極上の会津</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/iii.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>会津若松市 住宅支援 プロジェクト</h3>
                <div class="info">
                  <span>会津若松市 住宅支援 プロジェクト</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Listing -->
  <div class="listings">
    <div class="container">
      <div class="header">
        <div class="header-title">
          <h2>ポイント交換商品</h2>
          <span>まだ見ぬ会津の魅力を発見しよう</span>
        </div>
        <div class="header-viewOptions">
          <!-- <div class="viewAll">
            <span>View all</span>
          </div> -->
          <div class="viewMore">
            <span class="arrow circle left"><i data-feather="arrow-left"></i>
            </span>
            <span class="arrow circle right darker">
              <i data-feather="arrow-right"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="listings-grid">
        <div class="listings-col">
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/rice.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>西会津 元気米</h3>
                <div class="info">
                  <span>西会津の美味しいお米と野菜のセットです。</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">西会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/miso.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>会津のお味噌</h3>
                <div class="info">
                  <span>こだわりの一品</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/meika.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>銘菓</h3>
                <div class="info">
                  <span>老舗和菓子</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
        </div>
        <div class="listings-col">
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/kikurage.webp" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>白い木耳</h3>
                <div class="info">
                  <span>貴重な国産の白い木耳</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/begitable.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>西会津 ミネラル野菜</h3>
                <div class="info">
                  <span>西会津の健康野菜</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">西会津</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="../mainimg/bin.png" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>四号瓶 セット</h3>
                <div class="info">
                  <span>飯豊の伏流水と西会津の気候がうまい酒を生む</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">西会津</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="./main.js"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();
  </script>
</body>

</html>