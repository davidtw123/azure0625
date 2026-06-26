<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
</head>
<body>
    <header>
        <h1>歡迎造訪我的網站</h1>
    </header>

    <main>
        <?php
            // 輸出簡單的文字
            echo "<p>這是一個由 PHP 動態生成的段落。</p>";

            // 取得目前的年份（自動適用於 2026 年）
            $current_year = date("Y");
            echo "<p>現在時間是： " . date("Y-m-d H:i:s") . "</p>";
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo $current_year; ?> David 的網站. 版權所有.</p>
    </footer>
</body>
</html>
