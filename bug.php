```php
function doubleArray(array $arr): array {
    return array_map(function ($item) { return $item * 2; }, $arr);
}

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = doubleArray($numbers);
print_r($doubledNumbers);

// The issue is if the input array contains non-numeric values, the array_map function will throw a warning.
$mixedArray = [1, 2, 'a', 4, 5];
$doubledMixed = doubleArray($mixedArray);
print_r($doubledMixed); //Notice: A non well formed numeric value encountered
```