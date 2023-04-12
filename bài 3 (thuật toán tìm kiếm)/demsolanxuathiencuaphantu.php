<?php
   function binarySearch($arr, $x, $left, $right) {
    if ($right >= $left) {
        $mid = floor(($left + $right) / 2);
        if ($arr[$mid] == $x) {
            return $mid;
        } elseif ($arr[$mid] > $x) {
            return binarySearch($arr, $x, $left, $mid - 1);
        } else {
            return binarySearch($arr, $x, $mid + 1, $right);
        }
    }
    return -1;
}

function countOccurrences($arr, $x) {
    $n = count($arr);
    sort($arr);

    $index = binarySearch($arr, $x, 0, $n - 1);
    if ($index == -1) {
        return 0;
    }

    $count = 1;
    $left = $index - 1;
    while ($left >= 0 && $arr[$left] == $x) {
        $count++;
        $left--;
    }

    $right = $index + 1;
    while ($right < $n && $arr[$right] == $x) {
        $count++;
        $right++;
    }

    return $count;
}

$a = [1,4,3,4,5,6,4,7];
$n = 4 ;
echo '<br>'.'số lần xuất hiện của '.$n.' là :'.countOccurrences($a, $n);

