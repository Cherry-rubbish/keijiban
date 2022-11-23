<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="logo">
      <img src="4eachblog_logo.jpg">
    </div>
  <header>
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
    <div class="left">
    <h2>プログラミングに役立つ掲示板</h2>
        
    <div class="all_form">
     <h1>入力フォーム</h1>
    <form method="post" action="insert.php">
    <div>
      <label>ハンドルネーム</label> 
      <br>
      <input type="text" class="text" size="35" name="handlename">
    </div>      
  
    <div>
      <label>タイトル</label>
      <br>
      <input type="text" class="text" size="35" name="title">
    </div>
        
     <div>
      <label>コメント</label>
      <br>
      <textarea cols="60" name="comments" rows="7" ></textarea>
    </div>
    
    <div>
      <input type="submit" class="submit" value="投稿する">
    </div>
</form>
        </div>
        
<div class="all_form">
<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$stmt= $pdo->query("select*from 4each_keijiban");
?>

<?php   
echo "<div class='kiji'>";
echo "<h3>タイトル</h3>";
echo "<div class='contents'>";
echo "記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。<br>
記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
echo "<div class='handlename'>posted bt 通りすがり</div>";
echo "</div>";
echo "</div>";
   ?>

        </div>
        
<div class="all_form">
<?php
while($row = $stmt->fetch()) {
    
    echo "<div class='kiji'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class='contents'>";
    echo $row['comments'];
    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
    echo "</div>";
    echo "</div>";
}

?>
        </div>
        </div>
<div class="right">
        <div>
           <h3>人気の記事</h3>
            
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
            
        　　<h3>オススメリンク</h3>
              <li>インターノウス株式会社</li>
              <li>XAMPPのダウンロード</li>
              <li>Elicspのダウンロード</li>
              <li>Bracketsのダウンロード</li>
            <h3>カテゴリ</h3>
              <li>HTML</li>
              <li>PHP</li>
              <li>MySQL</li>
              <li>javascript</li>
            </div>
      </div>
    </main>
       

<footer>
    <h4>copyright©internous|4each blog the which provides A to Z about programmer</h4>
</footer>
</body>
</html>