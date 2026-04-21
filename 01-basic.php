<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式基礎概念</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }
        
        .header-bar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            color: #667eea;
            margin-bottom: 20px;
            font-size: 22px;
            padding-bottom: 10px;
            border-bottom: 3px solid #667eea;
        }
        
        .output-box {
            background: #f5f5f5;
            border-left: 4px solid #667eea;
            padding: 20px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            line-height: 1.8;
            color: #333;
            margin: 15px 0;
        }
        
        .variable-name {
            color: #d32f2f;
            font-weight: bold;
        }
        
        .variable-value {
            color: #388e3c;
            font-weight: bold;
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
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-bar">
            <h1>✨ 程式基礎概念</h1>
            <a href="index.html" class="back-btn">← 返回主選單</a>
        </div>
        
        <div class="content">
            <div class="section">
                <h2>變數交換練習</h2>
                <p style="margin-bottom: 15px; color: #666;">這個範例展示如何使用暫存變數來交換兩個變數的值。</p>
                
                <div class="output-box">
                    <strong>修改前：</strong><br>
                    <?php
                    $var1 = 10;
                    $var2 = 50;
                    echo "<span class='variable-name'>var1</span> = <span class='variable-value'>$var1</span><br>";
                    echo "<span class='variable-name'>var2</span> = <span class='variable-value'>$var2</span>";
                    ?>
                </div>
                
                <div class="output-box">
                    <strong>修改後（變數交換）：</strong><br>
                    <?php
                    $tmp = 0;
                    $tmp = $var2;
                    $var2 = $var1;
                    $var1 = $tmp;
                    echo "<span class='variable-name'>var1</span> = <span class='variable-value'>$var1</span><br>";
                    echo "<span class='variable-name'>var2</span> = <span class='variable-value'>$var2</span>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>