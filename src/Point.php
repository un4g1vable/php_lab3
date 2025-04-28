<?php
namespace App;

class Point
{
    private $x;
    private $y;

    /**
     * Конструктор точки
     * @param float $x - координата по оси X
     * @param float $y - координата по оси Y
     */
    public function __construct(float $x, float $y) {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Перемещает точку на указанные расстояния
     * @param float $x - смещение по X
     * @param float $y - смещение по Y
     */
    public function move(float $x, float $y): void {
        $this->x += $x;
        $this->y += $y;
    }

    // Возвращает координату X
    public function getX(): float {
        return $this->x;
    }

    // Возвращает координату Y
    public function getY(): float {
        return $this->y;
    }

    // Преобразует точку в строку для удобного вывода
    public function __toString(): string {
        return sprintf("Точка(X=%.2f, Y=%.2f)", $this->x, $this->y);
    }
}