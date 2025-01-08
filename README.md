# PHP Unset() Gotcha: Unexpected Array Re-indexing

This repository demonstrates a common, yet subtle, issue in PHP involving the `unset()` function and array re-indexing.  When you `unset()` an element from a numerically indexed array, PHP does *not* automatically re-index the remaining elements. This can lead to unexpected behavior if you're relying on consecutive numerical keys.

The `bug.php` file shows the problem. The `bugSolution.php` file demonstrates a fix using `array_values()` to re-index the array after removing elements.

This is a good example of how seemingly minor details in array manipulation can create unexpected and hard-to-debug errors in PHP applications.