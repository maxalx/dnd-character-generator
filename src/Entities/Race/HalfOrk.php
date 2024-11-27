<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class HalfOrk implements RaceInterface
{
    public function getName(): string
    {
        return 'Полуорк';
    }

    public function getSpeed(): int
    {
        return 30;
    }
}