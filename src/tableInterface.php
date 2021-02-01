<?php

namespace Soldy\retard;

interface TableInterface
{
    public function addColumn(
        string $id,
        string $name,
        int $maxSize
    ) : bool;
    public function addLine(
        array &$line = []
    ) : bool;
    public function render(
        int $first = 0, 
        int $offset = 20
    ) : string;
}

