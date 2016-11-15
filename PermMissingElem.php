<?php
/*
Task description
A zero-indexed array A consisting of N different integers is given. The array contains integers in the range [1..(N + 1)], which means that exactly one element is missing.

Your goal is to find that missing element.

Write a function:

function solution($A);
that, given a zero-indexed array A, returns the value of the missing element.

For example, given array A such that:

  A[0] = 2
  A[1] = 3
  A[2] = 1
  A[3] = 5
the function should return 4, as it is the missing element.

Assume that:

N is an integer within the range [0..100,000];
the elements of A are all distinct;
each element of array A is an integer within the range [1..(N + 1)].
Complexity:

expected worst-case time complexity is O(N);
expected worst-case space complexity is O(1), beyond input storage (not counting the storage required for input arguments).
Elements of input arrays can be modified.
 */
function solution($A) {
    // write your code in PHP7.0
    if(empty($A)) return 1;
    $max=max($A);
    $missing_sum=array_sum($A);
    $sum=0;
    for($i=1;$i<=$max;$i++) $sum+=$i;

    return $sum==$missing_sum?$max+1:$sum-$missing_sum;
}
/*
▶ example
example test ✔OK
1. 0.020 s OK
collapse allCorrectness tests
▶ empty_and_single
empty list and single element ✔OK
1. 0.021 s OK
2. 0.019 s OK
▶ missing_first_or_last
the first or the last element is missing ✔OK
1. 0.020 s OK
2. 0.020 s OK
▶ single
single element ✔OK
1. 0.019 s OK
2. 0.020 s OK
▶ double
two elements ✔OK
1. 0.019 s OK
2. 0.021 s OK
3. 0.019 s OK
▶ simple
simple test ✔OK
1. 0.020 s OK
collapse allPerformance tests
▶ medium1
medium test, length = ~10,000 ✔OK
1. 0.023 s OK
▶ medium2
medium test, length = ~10,000 ✔OK
1. 0.023 s OK
▶ large_range
range sequence, length = ~100,000 ✔OK
1. 0.049 s OK
2. 0.035 s OK
3. 0.035 s OK
▶ large1
large test, length = ~100,000 ✔OK
1. 0.049 s OK
▶ large2
large test, length = ~100,000 ✔OK
1. 0.038 s OK


*/