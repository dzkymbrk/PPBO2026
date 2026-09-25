<?php

namespace App\Library;
class Book
{
    public string $title;
    public string $description;

    public function show(): array
    {
        return [$this->title, $this->description];
    }
}