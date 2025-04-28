<?php
namespace App;

class MagicClass
{
    public function __construct() {
        echo "Called __construct\n";
    }

    public function __destruct() {
        echo "Called __destruct\n";
    }

    public function __call($name, $arguments) {
        echo "Called __call with $name\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "Called __callStatic with $name\n";
    }

    public function __get($name) {
        echo "Called __get with $name\n";
    }

    public function __set($name, $value) {
        echo "Called __set with $name\n";
    }

    public function __isset($name) {
        echo "Called __isset with $name\n";
        return false;
    }

    public function __unset($name) {
        echo "Called __unset with $name\n";
    }

    public function __toString() {
        echo "Called __toString\n";
        return "";
    }

    public function __invoke() {
        echo "Called __invoke\n";
    }

    public function __sleep() {
        echo "Called __sleep\n";
        return [];
    }

    public function __wakeup() {
        echo "Called __wakeup\n";
    }

    public function __clone() {
        echo "Called __clone\n";
    }
}