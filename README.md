# PHP: Subtle Array Key Handling and Unexpected Behavior

This repository demonstrates some uncommon yet potentially problematic behaviors in PHP related to array key handling.  The issues highlighted include:

1. **Non-integer array keys:** PHP's handling of string and integer keys that have the same value but different types.
2. **`isset()` and `empty()` function behavior with null, empty arrays, and empty strings.**  The differences in the functions' behavior with these data types can be confusing.
3. **`foreach` loop order with non-integer keys:**  The lack of order guarantee for non-integer keys can cause issues in some scenarios.

The `bug.php` file showcases the buggy code demonstrating these issues, while `bugSolution.php` offers improved solutions and explanations.