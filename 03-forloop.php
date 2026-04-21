<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>循環結構</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }
        
        .header-bar {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
            padding: 30px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-bar h1 {
            font-size: 28px;
        }
        
        .back-btn {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            border-color: white;
        }
        
        .content {
            padding: 40px;
        }
        
        .section {
            margin-bottom: 40px;
        }
        
        .section h2 {
            color: #00f2fe;
            margin-bottom: 20px;
            font-size: 22px;
            padding-bottom: 10px;
            border-bottom: 3px solid #00f2fe;
        }
        
        .loops-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .loop-box {
            background: #f5f5f5;
            border: 2px solid #00f2fe;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 242, 254, 0.1);
        }
        
        .loop-box h3 {
            color: #4facfe;
            margin-bottom: 15px;
            font-size: 18px;
        }
        
        .output-list {
            background: white;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            line-height: 1.8;
            color: #333;
            max-height: 300px;
            overflow-y: auto;
        }
        
        .output-list::-webkit-scrollbar {
            width: 6px;
        }
        
        .output-list::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }
        
        .output-list::-webkit-scrollbar-thumb {
            background: #00f2fe;
            border-radius: 3px;
        }
        
        .item-number {
            color: #4facfe;
            font-weight: bold;
        }
        
        .item-value {
            color: #ff6b6b;
            font-weight: bold;
        }
        
        .while-result {
            background: white;
            border-left: 4px solid #00f2fe;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
        }
        
        .result-label {
            color: #333;
            margin: 8px 0;
        }
        
        .result-value {
            color: #ff6b6b;
            font-weight: bold;
            font-size: 16px;
        }
        
        @media (max-width: 600px) {
            .header-bar {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .header-bar h1 {
                font-size: 22px;
            }
            
            .content {
                padding: 20px;
            }
            
            .loops-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-bar">
            <h1>🔁 循環結構</h1>
            <a href="index.html" class="back-btn">← 返回主選單</a>
        </div>
        
        <div class="content">
            <div class="section">
                <h2>FOR 循環練習</h2>
                <div class="loops-grid">
                    <div class="loop-box">
                        <h3>📊 倍數計算</h3>
                        <div class="output-list">
                            <?php
                            for ($i = 1; $i <= 10; $i += 1) {
                                echo "<span class='item-number'>$i</span> => <span class='item-value'>" . $i * 10 . "</span><br>";
                            }
                            ?>
                        </div>
                    </div>
                    
                    <div class="loop-box">
                        <h3>📈 序列輸出</h3>
                        <div class="output-list">
                            <?php
                            for ($i = 1; $i <= 10; $i += 1) {
                                echo "$i, ";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <h2>WHILE 循環練習</h2>
                <div class="loop-box">
                    <h3>🔢 成績遞增</h3>
                    <div class="while-result">
                        <?php
                        $score = 43;
                        $count = 0;
                        while ($score <= 60) {
                            $score += 10;
                            $count += 1;
                        }
                        echo "<div class='result-label'>初始成績：<span class='result-value'>43 分</span></div>";
                        echo "<div class='result-label'>最終成績：<span class='result-value'>$score 分</span></div>";
                        echo "<div class='result-label'>迴圈執行次數：<span class='result-value'>$count 次</span></div>";
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <h2>陣列與迭代</h2>
                <div class="loop-box">
                    <h3>👥 人員年齡表</h3>
                    <div class="output-list">
                        <?php
                        $ages = ["1號" => 26, "2號" => 54, "3號" => 18];
                        foreach ($ages as $key => $value) {
                            echo "<span class='item-number'>$key</span> - 年齡：<span class='item-value'>$value</span> 歲<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>