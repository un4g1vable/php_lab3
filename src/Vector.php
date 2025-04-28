<?php
namespace App;

class Vector
{
    private $x;
    private $y;
    /**
     * Конструктор вектора
     * @param float $x - координата по оси X
     * @param float $y - координата по оси Y
     */
    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Вычисляет длину вектора
     * @return float - длина вектора
     */
    public function getLength(): float {
        return sqrt($this->x * $this->x + $this->y * $this->y);
    }

    /**
     * Проверяет, является ли вектор нулевым
     * @return bool - true если нулевой
     */
    public function isZero(): bool {
        return $this->x == 0 && $this->y == 0;
    }

    /**
     * Проверяет перпендикулярность с другим вектором
     * @param Vector $other - другой вектор
     * @return bool - true если векторы перпендикулярны
     */
    public function isPerpendicular(Vector $other): bool {
        // Векторы перпендикулярны, если их скалярное произведение равно 0
        return ($this->x * $other->x + $this->y * $other->y) == 0;
    }

    // Возвращает координату X вектора
    public function getX(): float {
        return $this->x;
    }

    // Возвращает координату Y вектора
    public function getY(): float {
        return $this->y;
    }

    // Преобразует вектор в строку для удобного вывода
    public function __toString(): string {
        return sprintf("Вектор(X=%.2f, Y=%.2f)", $this->x, $this->y);
    }
}