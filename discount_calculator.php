<?php
// 変数の定義
$original_price = 5000; // 元の価格
$discount_rate = 0.20; // 割引率

// 計算の処理
$discount_amount = $original_price * $discount_rate; // 割引額の計算
$final_price = $original_price - $discount_amount; // 割引後の価格

// 結果の表示
echo "元の価格: " . number_format($original_price) . "円<br>";
echo "割引率: " . ($discount_rate * 100) . "%<br>";
echo "割引額: " . number_format($discount_amount) . "円<br>";
echo "割引後の価格: " . number_format($final_price) . "円<br>";

$number = 7;

if ($number % 2 == 0) {
    echo $number . "は偶数です。<br>";
} else {
    echo $number . "は奇数です。<br>";
}

$age = 25;
$is_member = true;
$is_student = false;

// 条件１: 18歳以上かつ会員
if ($age >= 18 && $is_member) {
    echo "割引が適用されます。<br>";
} 

// 条件２: 65歳以上または学生
if ($age >= 65 || $is_student) {
    echo "シニア割引・学生割引が適用されます。" . "<br>";
} 

$score = 100;
echo "初期スコア: {$score}点<br>";

$score += 50; // ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";

$score -= 30; // ダメージ
echo "ダメージ後: {$score}点<br>";

$score *= 2; // 2倍アイテム
echo "最終スコア: {$score}点<br>";



