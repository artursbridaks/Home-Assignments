<?php

echo 'Exercise 1' . PHP_EOL;

function findOddEvenPair(array $numbers): int
{
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        if ($numbers[$i] % 2 == 0 && $numbers[$i + 1] % 2 !== 0 ||
            $numbers[$i + 1] % 2 == 0 && $numbers[$i] % 2 !== 0) {
            $result = $numbers[$i];
            return array_search($result, $numbers);
        }
    }
    return 'Invalid input';
}

$numbers = [1, 2, 4, 3, 7];
echo findOddEvenPair($numbers) . PHP_EOL;

echo 'Exercise 2' . PHP_EOL;

class SummationService
{
    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        return array_sum(array_slice($this->data, $a, $b - $a + 1));
    }
}

$service = new SummationService([-1, 0, 2, 7, -15]);
echo $service->sum(2, 4) . PHP_EOL;

echo 'Exercise 3' . PHP_EOL;

function longestSubstr(string $text): string
{
    $subStrings = [];
    for ($i = 0; $i < strlen($text); $i++) {
        $subStrings[] = substr($text, $i, 2);
    }

    $space = '';
    $length = false;
    for ($i = 0; $i < strlen($text) - 1; $i++) {
        foreach ($subStrings as $subString) {
            $count = substr_count('', $subString);
            if ($count) {
                $length = true;
            } else if ($length) {
                die;
            }
        }
        $result = $space .= $text[$i];
    }
    return $result;
}

echo longestSubstr('aaa') . PHP_EOL;
