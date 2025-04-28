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

// Создаем точку
$point = new App\Point(2, 3);
echo "Создана: $point\n";

// Создаем векторы
$vector1 = new App\Vector(3, 4);
$vector2 = new App\Vector(0, 0);
$vector3 = new App\Vector(-4, 3); // Перпендикулярен vector1

echo "Длина вектора V1: " . $vector1->getLength() . "\n";
echo "Длина вектора V2: " . $vector2->getLength() . "\n";
echo "Длина вектора V3: " . $vector3->getLength() . "\n";
echo "V2 нулевой? " . ($vector2->isZero() ? "Да" : "Нет") . "\n";
echo "V1 и V3 перпендикулярны? " . ($vector1->isPerpendicular($vector3) ? "Да" : "Нет") . "\n";

// Перемещаем точку на вектор
echo "Точка до перемещения: $point\n";
$point->move($vector1->getX(), $vector1->getY());
echo "Точка после перемещения: $point\n";