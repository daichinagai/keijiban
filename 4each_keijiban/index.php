<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <img src="4eachblog_logo.jpg">
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
            <h1>プログラミングに役立つ掲示板</h1>
            <form>
               <h3>入力フォーム</h3>
                <lavel for="name">名前</lavel><br>
                <input type="text" name="handlename" size="25"><br>
                <lavel for="title">タイトル</lavel><br>
                <input type="text" name="title" size="25"><br>
                <lavel for="comments">コメント</lavel><br>
                <textarea name="comments" cols="50" rows="5"></textarea><br>
                <input id="submit" type="submit"> 
            </form>
            
            <div>
                <?php
                mb_internal_encoding("utf8");
                $pdo=new PDO("mysql:host=localhost; dbname=lesson01; charset=utf8","root","mysql");
                $stmt=$pdo->query("select*from 4each_keijiban");
                while($row=$stmt->fetch()){
                    echo '<div class="result">';
                    echo "<h3>".$row['title']."</h3>";
                    echo "<p>".$row['comments'];
                    echo "<br>posted by".$row['handlename']."</p>";
                    echo "</div>";
                }
                
                ?>
            </div>
        </main>
        <aside>
            <h3>人気の記事</h3>
            <ul>
                <li>PHPのオススメ本</li>
                <li>PHP　MyAdminの使い方</li>
                <li>今話題のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
                <br>
            <h3>オススメリンク</h3>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <br>
            <h3>カテゴリ</h3>
            <ul>
                <li>HTML</li>
                <li>PHP<li>
                <li>MySQL</li>
                <li>javaScript</li>
            </ul>
        </aside>
        <footer>
            <p> copyright (c) internous | 4each blog is the one which provides A to Z about programming.</p>
        </footer>
    </body>
</html>