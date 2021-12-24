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
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
    $stmt = $pdo->query("select * from 4each_keijiban");
    ?>

<header>
    <img src="4eachblog_logo.jpg">
    <ul class="menu">
        <li class="first">トップ</li>
        <li>プロフィール</li>
        <li>４eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>                 
        <li>その他</li>
    </ul>
</header>

<main>
    <div class="main">
        <div class="left_content">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php"> 
                <p>入力フォーム</p>
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
                    <textarea rows="7" cols="60" name="comments"></textarea>
                </div>
                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
            <?php
            while($row = $stmt->fetch()){
            echo "<div class='kiji'>";
                echo "<h3>".$row['title']."</h3><hr>";
                echo "<div class='comment'>";
                echo $row['comments'];
                echo"</div>";
                echo "<div class='handlename'>psted by: ".$row['handlename']."</div>";
            echo "</div>";
            }
            ?>

        </div>

        <div class="right_content">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタTop5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </div>  
</main>

<footer>
    copyright ©︎ internous | 4each blog the which provides A to Z about programming.
</footer>

</body>
</html>