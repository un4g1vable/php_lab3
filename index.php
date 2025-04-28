<?php

require 'vendor/autoload.php';

echo "1. Creating object (__construct):\n";
$obj = new App\MagicClass();

echo "\n2. Calling non-existent method (__call):\n";
$obj->nonExistentMethod();

echo "\n3. Calling non-existent static method (__callStatic):\n";
App\MagicClass::nonExistentStaticMethod();

echo "\n4. Accessing non-existent property (__get):\n";
$value = $obj->nonExistentProperty;

echo "\n5. Setting non-existent property (__set):\n";
$obj->nonExistentProperty = 'value';

echo "\n6. Checking isset on non-existent property (__isset):\n";
isset($obj->nonExistentProperty);

echo "\n7. Unsetting non-existent property (__unset):\n";
unset($obj->nonExistentProperty);

echo "\n8. Using object as string (__toString):\n";
echo $obj;

echo "\n9. Using object as function (__invoke):\n";
$obj();

echo "\n10. Cloning object (__clone):\n";
$clone = clone $obj;

echo "\n11. Object destruction (__destruct):\n";
unset($obj);
unset($clone);