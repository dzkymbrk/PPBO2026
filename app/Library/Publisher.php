<?php

class Publisher
{
    public string $name;
    public string $address;

    public function show(): array
    {
        return [$this->name, $this->address];
    }
}