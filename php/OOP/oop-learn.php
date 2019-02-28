<?php

// class A
// {
//     public function __call($name, $arguments)
//     {
//         echo "__call调用<br/>";
//         echo '$name为' . $name . "<br/>";
//         print_r($arguments);
//     }
// }
// (new A)->test("test", "argument");

(new MyClass)->func("test", "arg");
