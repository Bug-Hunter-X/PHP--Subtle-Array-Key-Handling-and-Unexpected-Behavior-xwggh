In PHP, a common yet subtle error arises when dealing with array keys that are not strictly integers.  Consider this scenario:

```php
$myArray = [];
$myArray["1"] = 10;
$myArray[1] = 20;
echo count($myArray); // Outputs 2
```

While you might expect only one element, PHP treats "1" and 1 as distinct keys. This can lead to unexpected behavior and makes debugging difficult.  Similarly, using non-string keys like objects or arrays can produce inconsistent results.

Another issue is related to `isset()` and `empty()` functions.  These functions behave differently with `null` and empty arrays or strings.

```php
$var = null;
if(empty($var)){ echo 'var is empty or null';} //true
if(isset($var)){ echo 'var is set';} //false

$var = [];
if(empty($var)){ echo 'var is empty or null';} //true
if(isset($var)){ echo 'var is set';} //true

$var = '';
if(empty($var)){ echo 'var is empty or null';} //true
if(isset($var)){ echo 'var is set';} //true
```

Finally, improper use of `foreach` loops on arrays with non-integer keys, especially in cases where order is crucial, can result in unexpected key order in iterations.  PHP does not guarantee any specific order for non-integer keys.