<?php

function searchInsertPosition($nums, $target) {
    $left = 0;
    $right = count($nums) - 1;
    
    while ($left <= $right) {
        $mid = (int)(($left + $right) / 2);
        
        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $left = $mid + 1;
        } else {
            $right = $mid - 1;
        }
    }

    return $left;
}
$testCases = [
    [[1,7,3,5,6,9,15], 5],  // Output: 2
    [[5,6,1,3], 2],          // Output: 1
    [[1,3,5,6], 7]           // Output: 4
];

foreach ($testCases as $testCase) {
    $nums = $testCase[0];
    $target = $testCase[1];
    sort($nums);
    echo "Input: nums = [" . implode(",", $nums) . "], target = $target\n";
    echo "Output: " . searchInsertPosition($nums, $target) . "\n\n";
}
?>
