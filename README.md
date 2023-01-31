# Magic methods of OOP (PHP)

All magic methods of OOP, and practical use case and real world examples.

- `__construct()`
- `__destruct()`
- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Call.php">`__call($fun, $arg)`</a>: The `__call()` method is called when you’re trying to invoke inaccessible methods, the methods that you haven’t defined in your class.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/CallStatic.php">`__callStatic($fun, $arg)`</a>

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Get.php">`__get($property)`</a>: The `__get()` method is exactly the opposite of `__set()`. The `__get()` magic method is called when you try to read data from inaccessible or non-existent object properties. The purpose of this method is to provide values to such properties.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Set.php">`__set($property, $value)`</a>: The `__set()` magic method is called when you try to set data to inaccessible or non-existent object properties. The purpose of this method is to set extra object data for which you haven’t defined object properties explicitly.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Isset.php">`__isset($content)`</a>: The `__isset()` magic method is called when you call the isset() method on inaccessible or non-existent object properties.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Unset.php">`__unset($content)`</a>: `__unset()` is another magic method that is invoked automatically for destroying a variable and freeing up memory space. When `__isset()` is used for checking whether a variable exists or not, the `__unset()` simply destroys a variable when used on non-existing or inaccessible properties.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Sleep.php">`__sleep()`</a>: This method is called first while executing serialize(). It returns the object’s property array on cleaning PHP class objects before serialization.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/WakeUp.php">`__wakeup()`</a>: The magic method helps to re-establish any connections and start-up tasks when programmers invoke the `unserialize()` function with the class object. This method gets invoked automatically when the deserialization takes place.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/ToString.php">`__toString()`</a>: The `__toString()` magic method allows you to define what you would like to display when an object of the class is treated like a string. If you use echo or print on your object, and you haven’t defined the `__toString()` method, it’ll give an error.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/Invoke.php">`__invoke()`</a>: This method is defined in a class that will be called while trying to call an object in a way of calling function.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/SetState.php">`__set_state($array)`</a>: This is a static magic method that is used with the `var_export()` function. As we all know that the var_export() function will provide or return a piece of structured information about any variable or class instance passed within it. When PHP programmers use the `var_export()` function for exporting classes, they use the \_\_set_state() method.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/CloneStudent.php">`__clone()`</a>: If you want to duplicate an existing object, you could use the clone keyword to do that. But after cloning, if you want to modify the properties of the cloned object, you can define the `__clone()` magic method in your class.

- <a href="https://github.com/beyond88/oop-magic-methods/blob/main/DebugInfo.php">`__debugInfo()`</a>: It is another utility magic method that is called automatically when we want to dump any object with the help of the `var_dump()` function. In case this method is not defined as associating an object, then it dumps all public, protected, and private properties of that class.

- <a href="#">`__serialize()`</a>: 
