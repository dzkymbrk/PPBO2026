<?php

class Kerucut
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
        $s = sqrt(pow($this->r, 2) + pow($this->t, 2));
        return 3.14 * $this->r * ($this->r + $s);
    }

    public function volume(): float
    {
        return (1 / 3) * 3.14 * $this->r * $this->r * $this->t;
    }
}