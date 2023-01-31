# Magic methods of OOP (PHP)

All magic methods of OOP, and practical use case and real world examples.

- `__construct()`
- `__destruct()`
- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Call.php">`__call($fun, $arg)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/CallStatic.php">`__callStatic($fun, $arg)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Get.php">`__get($property)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Set.php">`__set($property, $value)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Isset.php">`__isset($content)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/UnSet.php">`__unset($content)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Sleep.php">`__sleep()`</a>: This method is called first while executing serialize(). It returns the object’s property array on cleaning PHP class objects before serialization.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/WakeUp.php">`__wakeup()`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/ToString.php">`__toString()`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Invoke.php">`__invoke()`</a>: This method is defined in a class that will be called while trying to call an object in a way of calling function.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/SetState.php">`__set_state($array)`</a>: This is a static magic method that is used with the var_export() function. As we all know that the var_export() function will provide or return a piece of structured information about any variable or class instance passed within it. When PHP programmers use the var_export() function for exporting classes, they use the \_\_set_state() method.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/CloneStudent.php">`__clone()`</a>: If you want to duplicate an existing object, you could use the clone keyword to do that. But after cloning, if you want to modify the properties of the cloned object, you can define the \_\_clone() magic method in your class.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/DebugInfo.php">`__debugInfo()`</a>: It is another utility magic method that is called automatically when we want to dump any object with the help of the `var_dump()` function. In case this method is not defined as associating an object, then it dumps all public, protected, and private properties of that class.

- <a href="#">`__serialize()`</a>: 
