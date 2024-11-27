<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Dwarf implements RaceInterface
{
    public function getName(): string
    {
        return 'Дварф';
    }

    public function getSpeed(): int
    {
        return 25;
    }
}