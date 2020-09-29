<!doctype HTML>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <header>
            <div class="menu">
                <ul>
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>    
            </div>   
        </header>
        
        <main>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php">
                    <h3>入力ホーム</h3>
                    <label>ハンドルネーム</label><br>
                    <input type="text" class="text" size=40px name="handlename"><br>
                    <label>タイトル</label><br>
                    <input type="text" class="text" size=40px name="title"><br>
                    <label>コメント</label><br>
                    <textarea class="text" cols="60" rows="7" name="comments"></textarea>
                    <br>
                    <input type="submit" class="submit" value="投稿する">
                </form>
                
                <div class="article">
                    <h3>タイトル</h3>
                    <p>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。</p>
                    <p>posted by 通りすがり</p>
                </div>
                
                <div class="article">
                    <h3>タイトル</h3>
                    <p>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。<br>記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。記事の中身。</p>
                    <p>posted by 通りすがり</p>
                </div>
            </div>
            
            <div class="right">
                <div class="sub">
                    <h2>人気の記事</h2>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP　Myadminの使い方</li>
                        <li>今人気のエディタ　Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                </div>
                <div class="sub">
                    <h2>オススメリンク</h2>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XANPPのダウンロード</li>
                        <li>Ecripseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                </div>
                <div class="sub">
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
            copyright © internous|4each blog the which provides A to Z about programming.
        </footer>
    </body>
</html>        