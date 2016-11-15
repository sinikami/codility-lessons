<?php
/*
 A small frog wants to get to the other side of the road. The frog is currently located at position X and wants to get to a position greater than or equal to Y. The small frog always jumps a fixed distance, D.

Count the minimal number of jumps that the small frog must perform to reach its target.

Write a function:

function solution($X, $Y, $D);
that, given three integers X, Y and D, returns the minimal number of jumps from position X to a position equal to or greater than Y.

For example, given:

  X = 10
  Y = 85
  D = 30
the function should return 3, because the frog will be positioned as follows:

after the first jump, at position 10 + 30 = 40
after the second jump, at position 10 + 30 + 30 = 70
after the third jump, at position 10 + 30 + 30 + 30 = 100
Assume that:

X, Y and D are integers within the range [1..1,000,000,000];
X ≤ Y.
Complexity:

expected worst-case time complexity is O(1);
expected worst-case space complexity is O(1).

*/

function solution($X, $Y, $D) {
    // write your code in PHP7.0
    if($X>=$Y) return 0;
    $length=$Y - $X;
    $steps=$length / $D;
    $less=round($steps);
    if($X+$less*$D < $Y) $less++;
    return (int)$less;
}

/*

▶ example
example test ✔OK
1. 0.021 s OK
collapse allCorrectness tests
▶ simple1
simple test ✔OK
1. 0.021 s OK
2. 0.021 s OK
▶ simple2 ✔OK
1. 0.021 s OK
2. 0.022 s OK
▶ extreme_position
no jump needed ✔OK
1. 0.021 s OK
2. 0.021 s OK
▶ small_extreme_jump
one big jump ✔OK
1. 0.021 s OK
collapse allPerformance tests
▶ many_jump1
many jumps, D = 2 ✔OK
1. 0.022 s OK
▶ many_jump2
many jumps, D = 99 ✔OK
1. 0.021 s OK
▶ many_jump3
many jumps, D = 1283 ✔OK
1. 0.021 s OK
▶ big_extreme_jump
maximal number of jumps ✔OK
1. 0.021 s OK
▶ small_jumps
many small jumps ✔OK
1. 0.021 s OK

*/