# Magic methods of OOP (PHP) 
All magic methods of OOP, and practical use case and real world examples. 

- `__construct()`
- `__destruct()`
- `__call($fun, $arg)`
- `__callStatic($fun, $arg)`
- `__get($property)`
- `__set($property, $value)`
- `__isset($content)`
- `__unset($content)`
- `__sleep()`
- `__wakeup()`
- `__toString()`
- `__invoke()`
- `__set_state($array)`
- `__clone()`
- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/DebugInfo.php">`__debugInfo()`</a>: It is another utility magic method that is called automatically when we want to dump any object with the help of the `var_dump()` function. In case this method is not defined as associating an object, then it dumps all public, protected, and private properties of that class.
