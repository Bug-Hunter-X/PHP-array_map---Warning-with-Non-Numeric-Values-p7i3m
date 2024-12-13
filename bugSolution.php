```php
function doubleArray(array $arr): array {
    return array_map(function ($item) { 
        if (is_numeric($item)) {
            return $item * 2;
        } else {
            return $item; // Or handle the non-numeric case appropriately, like returning NULL or throwing an exception
        }
    }, $arr);
}

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = doubleArray($numbers);
print_r($doubledNumbers);

//The issue is fixed by adding a check using is_numeric().
$mixedArray = [1, 2, 'a', 4, 5];
$doubledMixed = doubleArray($mixedArray);
print_r($doubledMixed); 
```