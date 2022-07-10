<!DOCTYPE HTML>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>diworksblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css?after">
    </head>
    
    <body>
        
        <?php
        
        mb_internal_encoding("utf8");
        $pdo= new PDO(
            "mysql:dbname=lesson01;host=localhost;",
            "root",
            "root"
        );
        
        $stmt = $pdo->query("select * from diworks_keijiban");
        
//        while ($row = $stmt->fetch()){
//            echo $row['handlename'];
//            echo $row['title'];
//            echo $row['comments'];
//        }
        
        ?>
            
        <header>
            <div class="logo">
            <img src="diblog_logo.jpg">
            </div>
            
            <nav>
            <ul class="topnav">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
            </nav>
        </header>
        
        <div class="container">
            
            <main>
            <h1>プログラミングに役立つ掲示板</h1>
        
            <article class="box">
                <h3 class="red">入力フォーム</h3>
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
                    <textarea cols="60" rows="7" name="comments">
                    </textarea>
                </div>
                
                <div>
                    <input type="submit" value="投稿する" class="submit">
                    
                </div>
                   
                </form>
            </article>
            
               <?php
                
//                echo "<div class='kiji'>";
//                echo "<h3 class=mokuzi>タイトル</h3>";
//                echo "<div class='contents'>";
//                echo "記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
//                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
//                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>
//                記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>";
//                echo "<div class='handlename'>posted by 通りすがり</div>";
//                echo "</div>";
//                echo "</div>";
                
                ?>
        
            
            <article>
              
                <?php
                
                while($row = $stmt->fetch()){
                    echo "<div class='kiji'>";
                    echo "<h3 class= 'mokuzi'>".$row['title']."</h3><br>";
                    echo"<div class='contents'>".$row['comments']."</div>";
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo "<br>";
                    echo "</div>";
                }
                
                ?>
              
            </article>
            
            </main>
            
            
            <aside class="submenu">
            <h3 class="line">人気の記事</h3>
            <nav>
                <ul>
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
            </nav>
            
            <h3 class="line">オススメリンク</h3>
            <nav>
                <ul>
                    <li>ディーアイワークス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipesのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>
            </nav>
            
            <h3 class="line">カテゴリ</h3>
            <nav>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </nav>
            
            </aside>
        
        </div>
        
 
        
        <footer>
            <p>Copynright D.I.Works D.I.Brog is the one whichp rovides
            A to Z about programming</p>
</footer>
           
        
     </body>
</html>