<?php

echo 'Task 1' . PHP_EOL;

function maxProfit(array $pricesAndPurchases): int
{
    $maxPrice = max(array_column($pricesAndPurchases, 'price'));
    $values = array_slice($pricesAndPurchases, 0, ($maxPrice - 1));

    $sum = 0;
    foreach ($values as $value) {
        if ($value['price']) {
            $purchased = $sum += $value['purchased'];
        }
    }

    $totallyPurchased = $maxPrice * $purchased;

    $total = 0;
    foreach ($values as $value) {
        $total += $value['price'] * $value['purchased'];
    }

    $profit = $totallyPurchased - $total;
    return $profit;
}

$maxProfit = [
    0 => ['price' => 2, 'purchased' => 3],
    1 => ['price' => 3, 'purchased' => 0],
    2 => ['price' => 1, 'purchased' => 1],
    3 => ['price' => 5, 'purchased' => 4],
    4 => ['price' => 3, 'purchased' => 1],
    5 => ['price' => 2, 'purchased' => 2]
];



echo 'Task 2' . PHP_EOL;

function stringCost(string $src, string $tgt, int $insertionCost, int $deletionCost, int $replacementCost): int
{
    return levenshtein($src, $tgt, $insertionCost, $replacementCost, $deletionCost);
}

echo stringCost('bitten', 'meeting', 2, 3, 6) . PHP_EOL;

echo 'Task 3' . PHP_EOL;

function incrementalMedian(array $values)
{
    sort($values);
    for ($i = 0; $i < count($values); $i++) {
        $result[] = round($values[$i] / 2);
    }
    return implode('', $result);
}

echo incrementalMedian([1, 7, 4, 7, 13]) . PHP_EOL;

