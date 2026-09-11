<?php

class Lingkaran
{
    public float $r;

    public function __construct(float $r)
    {
        $this->r = $r;
    }

    public function luas(): float
    {
        return 3.14 * $this->r * $this->r;
    }

    public function keliling(): float
    {
        return 2 * 3.14 * $this->r;
    }
}