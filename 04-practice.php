<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>綜合練習</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Microsoft YaHei', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
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
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
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
            color: #38f9d7;
            margin-bottom: 20px;
            font-size: 22px;
            padding-bottom: 10px;
            border-bottom: 3px solid #38f9d7;
        }
        
        .grade-legend {
            background: linear-gradient(135deg, #f5f5f5 0%, #f0f0f0 100%);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .legend-title {
            color: #333;
            font-weight: bold;
            margin-bottom: 12px;
        }
        
        .legend-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 10px;
        }
        
        .legend-item {
            padding: 8px 12px;
            background: white;
            border-left: 4px solid #38f9d7;
            border-radius: 4px;
            color: #333;
        }
        
        .result-box {
            background: #f5f5f5;
            border-left: 4px solid #38f9d7;
            padding: 20px;
            border-radius: 5px;
            margin: 15px 0;
        }
        
        .result-label {
            color: #333;
            font-weight: bold;
            margin-bottom: 8px;
        }
        
        .result-value {
            color: #43e97b;
            font-size: 18px;
            font-weight: bold;
            display: inline-block;
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .method-box {
            background: white;
            border: 2px solid #43e97b;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }
        
        .method-title {
            color: #43e97b;
            font-weight: bold;
            margin-bottom: 15px;
        }
        
        .score-input {
            background: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        
        .score-input p {
            color: #666;
            margin-bottom: 5px;
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
            
            .legend-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-bar">
            <h1>🎯 綜合練習</h1>
            <a href="index.html" class="back-btn">← 返回主選單</a>
        </div>
        
        <div class="content">
            <div class="section">
                <h2>成績等級轉換系統</h2>
                
                <div class="grade-legend">
                    <div class="legend-title">📋 評分標準：</div>
                    <div class="legend-grid">
                        <div class="legend-item">0~59 分 → <strong>E</strong></div>
                        <div class="legend-item">60~69 分 → <strong>D</strong></div>
                        <div class="legend-item">70~79 分 → <strong>C</strong></div>
                        <div class="legend-item">80~89 分 → <strong>B</strong></div>
                        <div class="legend-item">90~100 分 → <strong>A</strong></div>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <h2>方法一：詳細判斷</h2>
                <div class="method-box">
                    <div class="score-input">
                        <p>📊 測試成績：</p>
                        <div class="result-label">成績：<span class="result-value">45 分</span></div>
                    </div>
                    
                    <div class="result-box">
                        <div class="result-label">等級判定結果：</div>
                        <?php
                        $score = 45;
                        $level = '';
                        if ($score >= 0 && $score < 60) {
                            $level = 'E';
                        } elseif ($score >= 60 && $score < 70) {
                            $level = 'D';
                        } elseif ($score >= 70 && $score < 80) {
                            $level = 'C';
                        } elseif ($score >= 80 && $score < 90) {
                            $level = 'B';
                        } elseif ($score >= 90 && $score <= 100) {
                            $level = 'A';
                        } else {
                            $level = '成績輸入錯誤';
                        }
                        echo "<span class='result-value'>$level</span>";
                        ?>
                    </div>
                </div>
            </div>
            
            <div class="section">
                <h2>方法二：簡化判斷</h2>
                <div class="method-box">
                    <div class="score-input">
                        <p>📊 測試成績：</p>
                        <div class="result-label">成績：<span class="result-value">-45 分</span></div>
                        <p style="color: #999; font-size: 12px; margin-top: 8px;">（測試無效輸入）</p>
                    </div>
                    
                    <div class="result-box">
                        <div class="result-label">等級判定結果：</div>
                        <?php
                        $score = -45;
                        $level = '';
                        if ($score < 0 || $score > 100) {
                            $level = '成績輸入錯誤';
                        } elseif ($score < 60) {
                            $level = 'E';
                        } elseif ($score < 70) {
                            $level = 'D';
                        } elseif ($score < 80) {
                            $level = 'C';
                        } elseif ($score < 90) {
                            $level = 'B';
                        } elseif ($score <= 100) {
                            $level = 'A';
                        }
                        echo "<span class='result-value'>$level</span>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>