To prevent silent failures when dealing with array keys in PHP, use explicit checks before accessing them.  Always verify that a key exists and has a non-NULL value before using its associated value. The `array_key_exists()` function can be used to explicitly check for the existence of keys. If the key may have a NULL value, use a strict equality check (`===`) to ensure the value is not NULL.  Alternatively, use the null coalescing operator (`??`) to provide a default value if the key does not exist.

Here's the improved code:

```php
$myArray = [];
$myArray["a"] = 1;
$myArray["b"] = 2;

if (array_key_exists("c", $myArray) && $myArray["c"] !== NULL) {
  echo $myArray["c"];
} else {
  echo "Key 'c' is not set or is NULL";
}

//Using null coalescing operator
echo $myArray["d"] ?? "Key 'd' is not set or is NULL";
```

By explicitly checking for the existence of keys and handling NULL values gracefully, you can significantly reduce the risk of unexpected behavior and make your code more robust.