<?php

class Tabung
{
    public float $r;
    public float $t;

    public function __construct(float $r, float $t)
    {
        $this->r = $r;
        $this->t = $t;
    }

    public function luasPermukaan(): float
    {
        return 2 * 3.14 * $this->r * ($this->r + $this->t);
    }

    public function volume(): float
    {
        return 3.14 * $this->r * $this->r * $this->t;
    }
}