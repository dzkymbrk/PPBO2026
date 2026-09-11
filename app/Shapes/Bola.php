<?php

class Bola
{
    public float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function luasPermukaan(): float
    {
        return 4 * 3.14 * $this->r * $this->r;
    }

    public function volume(): float
    {
        return (4 / 3) * 3.14 * pow($this->r, 3);
    }
}