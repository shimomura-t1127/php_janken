<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>php課題</title>
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>


  <!-- タイトル -->
  <h1 class="title">じゃんけんゲーム</h1>
      <div class="syoubu">
        <!-- 自分の手 -->
        <div class="sentaku">
          <form action="php" method="post" id="form">
          <label><input type="radio" name="my_hand" value="a">グー</label>
          <label><input type="radio" name="my_hand" value="b">チョキ</label>
          <label><input type="radio" name="my_hand" value="c">パー</label>
          <input type="submit" value="ポン" class="submit">
          </form>
        </div>

        <h2 class="vs">VS</h2>

        <!-- 相手の手 -->
        <div class="com_hand">

          <?php
          // phpのコードを記述

          $random = mt_rand(1,3);
          if($random === 1 && $_POST['my_hand']=="a"){
          echo '<img src="img/guu.png" >';
          echo "あいこ";
          }else if($random === 1 && $_POST['my_hand']=="b"){
          echo '<img src="img/guu.png" >';
          echo "負け";
          }else if($random === 1 && $_POST['my_hand']=="c"){
          echo '<img src="img/guu.png" >';
          echo "勝ち";
          }

          if($random === 2 && $_POST['my_hand']=="a"){
          echo '<img src="img/tyoki.png" >';
          echo "勝ち";
          }else if($random === 2 && $_POST['my_hand']=="b"){
          echo '<img src="img/tyoki.png" >';
          echo "あいこ";
          }else if($random === 2 && $_POST['my_hand']=="c"){
          echo '<img src="img/tyoki.png" >';
          echo "負け";
          }

          if($random === 3 && $_POST['my_hand']=="a"){
          echo '<img src="img/paa.png" >';
          echo "勝ち";
          }else if($random === 3 && $_POST['my_hand']=="b"){
          echo '<img src="img/paa.png" >';
          echo "あいこ";
          }else if($random === 3 && $_POST['my_hand']=="c"){
          echo '<img src="img/paa.png" >';
          echo "負け";
          }
          ?>

          <!-- <div id="result"></div> -->

          

          
        </div>

      </div>

     

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- js -->
    <script src='js/app.js'></script>
  </body>
</html>
