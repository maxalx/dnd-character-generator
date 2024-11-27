<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class HalfElf implements RaceInterface
{
    public function getName(): string
    {
        return 'Полуэльф';
    }

    public function getSpeed(): int
    {
        return 30;
    }
}