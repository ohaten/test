<!DOCTYPE html>
<html lang="ja"> 
<head>
    <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>


   <body>
     
     
     <?php

  
  	mb_internal_encoding("utf8");

    $pdo=new PDO("mysql:dbname=keiji01;host=localhost;","root","mysql");

    $stmt = $pdo->query("select * from 4eache_keijiban");
     
       
     ?>
 
    <div class="jpg1">
    <img src="4eachblog_logo.jpg">
    </div>
        
    <header>
     <div class="header"></div>
     <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
         <li>その他</li>
        </ul>
      </header>
       
    
      <main>
        <div class="main-container">
         <div class="left">
          <h1>プログラミングに役立つ掲示板</h1>
           
           
        <h2>入力フォーム</h2>    
        
    <form method="post" action="insert.php">
    <div>
    <label>ハンドルネーム</label>
    <br>
    <input type="text"class="text" size="35" name="name">
    </div>
    
    <div>
    <label>タイトル</label>
    <br>
    <input type="text"class="text" size="50"name="title">
    </div>   
        
    <div>
    <label>コメント</label>
    <br>
    <textarea cols="35" rows="7" name="coment"></textarea>
    </div>
        
    <div>
    <input type="submit" class="submit"
    value="投稿する">
    </div>  
    </form>
    </div>
    
         <div class="right">
          <h3>人気の記事</h3>
           
         <div class="rightA">
          PHPオススメ本
         </div>
         <div class="rightA">
          PHP Myadminの使い方  
         </div>
         <div class="rightA">
          いま人気のエディタTop5  
         </div>
         <div class="rightA">
          HTMLの基礎  
         </div>
           
         <h3>オススメリンク</h3>
           
        <div class="rightA">
         インターノウス株式会社
        </div>
        <div class="rightA">
         XAMPPのダウンロード   
        </div>
        <div class="rightA">
         Eclipseのダウンロード
        </div>
        <div class="rightA">
         Braketsのダウンロード   
        </div>
           
        <h3>カテゴリ</h3>
        
        <div class="rightA">
         HTML   
        </div>
        <div class="rightA">
         PHP   
        </div>
        <div class="rightA">
         MySQL   
        </div>
        <div class="rightA">
         javaScript
        </div>
           
        </div>
         </div>
   <?php 
    while($row = $stmt->fetch()){
      echo "<div class='kiji'>";
       echo "<h3>".$row['title']."</h3>";
       echo "<div class='contents'>";
       echo $row['coment'];
       echo "<div class='name'>posted by".$row['name']."</div>";
       echo "</div>";
       echo "</div>";
     }
      ?>
     </main>
      
    <footer>
        copyright internous | 4each blog is he one which provides A to Z about programming.
    </footer>       

    </body>
    </html> 