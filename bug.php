function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The problem is that unset() does not re-index the array.
//This can be unexpected behavior if you are counting on numerical keys.

function fooFixed(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return array_values($arr);
}

$arr = ['foo', 'bar', 'baz'];
$result = fooFixed($arr);
print_r($result); // Output: Array ( [0] => foo [1] => baz )