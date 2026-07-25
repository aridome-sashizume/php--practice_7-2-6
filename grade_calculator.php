<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績判定システム</title>
</head>
<body>
    <?php
        echo "<h1>成績判定システム</h1>";

        echo "<h2>【個人成績】</h2>";
        $students = [
            ["name" => "田中太郎", "score" => 85],
            ["name" => "佐藤花子", "score" => 92],
            ["name" => "鈴木一郎", "score" => 78],
            ["name" => "高橋美咲", "score" => 65],
            ["name" => "伊藤健太", "score" => 58],
        ];

        // 成績を判定する関数   
        function calculateGrade($score) {
            if ($score >= 90) {
                return "A";
            } elseif ($score >= 80) {
                return "B";
            } elseif ($score >= 70) {
                return "C";
            } elseif ($score >= 60) {
                return "D";
            } else {
                return "F";
            }
        }

        // 学生の成績を判定して表示
        foreach ($students as $student) {
            $name = $student["name"];
            $score = $student["score"];
            $grade = calculateGrade($score);

            echo "名前: " . $name . ", スコア: " . $score . ", 評価: " . $grade . "<br>";
        } 

        echo "<h2>【統計情報】</h2>";
        $pass_count = 0;
        $total_score= 0;
        $fail_count = 0;

        foreach ($students as $student) {
            $score = $student["score"];
            $total_score += $score;

            if ($score >= 60) {
                $pass_count++;
            } else {
                $fail_count++;
            }
        }

        $average_score = $total_score / count($students);

        echo "合格者数: " . $pass_count . "名<br>";
        echo "不合格者数: " . $fail_count . "名<br>";
        echo "平均スコア: " . round($average_score, 2) . "点";
    ?>
</body>
</html>