<?php
// Tạo số ngẫu nhiên trong khoảng từ 1 đến 100
$min = 1;
$max = 100;
$targetNumber = rand($min, $max);

// Khởi tạo số lần đoán và biến kết quả đoán
$numGuesses = 0;
$isCorrect = false;

// Vòng lặp cho đến khi đoán đúng hoặc hết số lượt đoán
while (!$isCorrect && $numGuesses < 7) {
    // Hiển thị số lần đoán và yêu cầu nhập con số
    echo "Lần đoán thứ " . ($numGuesses + 1) . ". Mời bạn nhập một số trong khoảng từ $min đến $max: ";
    $guess = (int) readline();

    if ($guess == $targetNumber) {
        // Nếu đoán đúng, hiển thị số lần đoán và chúc mừng
        echo "Chính xác! Số đó là $targetNumber. Bạn đã đoán đúng sau $numGuesses lần!\n";
        $isCorrect = true;
    } elseif ($guess < $targetNumber) {
        // Nếu đoán nhỏ hơn số đích, tiếp tục đoán với khoảng từ số đó đến $max
        echo "Số bạn đoán nhỏ hơn số đích. Hãy đoán lại!\n";
        $min = $guess + 1;
    } else {
        // Ngược lại, tiếp tục đoán với khoảng từ $min đến số đó 
        echo "Số bạn đoán lớn hơn số đích. Hãy đoán lại!\n";
        $max = $guess - 1;
    }

    // Tăng số lần đoán lên 1
    $numGuesses++;
}

// Nếu hết số lượt đoán mà không đoán đúng, thông báo kết thúc trò chơi
if (!$isCorrect) {
    echo "Bạn đã hết số lượt đoán. Số đích là $targetNumber.\n";
}