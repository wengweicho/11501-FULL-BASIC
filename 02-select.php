<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>流程控制</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
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
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
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
            color: #f5576c;
            margin-bottom: 20px;
            font-size: 22px;
            padding-bottom: 10px;
            border-bottom: 3px solid #f5576c;
        }
        
        .result-box {
            background: #f5f5f5;
            border-left: 4px solid #f5576c;
            padding: 20px;
            border-radius: 5px;
            margin: 15px 0;
            line-height: 1.8;
        }
        
        .result-label {
            color: #333;
            font-weight: bold;
            margin-bottom: 8px;
        }
        
        .result-value {
            color: #f5576c;
            font-size: 18px;
            font-weight: bold;
        }
        
        .grade-box {
            display: inline-block;
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            padding: 12px 24px;
            border-radius: 25px;
            font-weight: bold;
            margin: 5px 0;
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
            <h1>🔀 流程控制</h1>
            <a href="index.html" class="back-btn">← 返回主選單</a>
        </div>
        
        <div class="content">
            <div class="section">
                <h2>IF-ELSEIF-ELSE 判斷結構</h2>
                <div class="result-box">
                    <div class="result-label">📊 成績判定：</div>
                    <?php
                    $score = 90;
                    echo "成績：<span class='result-value'>$score 分</span><br>";
                    echo "等級判定：";
                    
                    if ($score >= 90) {
                        echo "<span class='grade-box'>A++</span>";
                    } elseif ($score >= 60) {
                        echo "<span class='grade-box'>及格</span>";
                    } else {
                        echo "<span class='grade-box'>不及格</span>";
                    }
                    ?>
                </div>
            </div>
            
            <div class="section">
                <h2>SWITCH 多選結構</h2>
                <div class="result-box">
                    <div class="result-label">📈 成績等級分析：</div>
                    <?php
                    $level = "B";
                    echo "選定等級：<span class='result-value'>$level</span><br>";
                    echo "說明：";
                    
                    switch ($level) {
                        case 'A':
                            echo "<span class='grade-box'>優秀</span>";
                            break;
                        case 'B':
                            echo "<span class='grade-box'>良好</span>";
                            break;
                        case 'C':
                            echo "<span class='grade-box'>中等</span>";
                            break;
                        default:
                            echo "<span class='grade-box'>未知等級</span>";
                            break;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>