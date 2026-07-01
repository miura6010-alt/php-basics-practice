<?php
// 商品名の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1; 

echo "商品名: " . $product_name . "<br>";
echo "単価: " . $price . "円<br>";
echo "数量: " . $quantity . "個<br>";

$subtotal = $price * $quantity;
echo "小計: " . number_format($subtotal) . "円<br>";

$tax_amount = $subtotal * $tax_rate;
echo "消費税(10%): " . number_format($tax_amount) . "円<br>";

$total = $subtotal + $tax_amount;
echo "<strong>合計金額: " . number_format($total) . "円</strong><br>";
?>