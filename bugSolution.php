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