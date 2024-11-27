<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Elf implements RaceInterface
{
    public function getName(): string
    {
        return 'Эльф';
    }

    public function getSpeed(): int
    {
        return 30;
    }
}