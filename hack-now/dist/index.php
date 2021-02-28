<?php

session_start();
include("../login/functions.php");
check_session_id();

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
          <h2>系列店舗</h2>
          <span>私たちのサービスが使えるお店</span>
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
              <span class="smallText">福岡 | 大名</span>
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
              <span class="smallText">福岡 | 薬院</span>
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
              <span class="smallText">福岡 | 博多</span>
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
              <span class="smallText">福岡 | 六本松</span>
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
              <span class="smallText">福岡 | 今泉</span>
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
              <span class="smallText">福岡 | 薬院</span>
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
          <h2>Popular near you</h2>
          <span>The fastest food to your door</span>
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
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1301&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1532636875304-0c89119d9b4d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
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
                <h3>German Doner Kebab 222</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
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
          <h2>Special offers</h2>
          <span>The fastest food to your door</span>
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
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1550547660-d9450f859349?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1301&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1532636875304-0c89119d9b4d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
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
                <h3>German Doner Kebab 222</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1506354666786-959d6d497f1a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
            </div>
          </div>
          <div class="listings-grid-element">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" alt="Listing pic">
            </div>
            <div class="text">
              <div class="text-title">
                <h3>German Doner Kebab</h3>
                <div class="info">
                  <span>£4.99 delivery fee | 20-30 MINS | £</span>
                </div>
              </div>
              <div class="rating">
                <span class="circle">4.2</span>
              </div>
            </div>
            <div class="text-lower">
              <span class="smallText">German | Middle Eastern | Halal | Burger| Fast Food</span>
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