<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Halfling implements RaceInterface
{
    public function getName(): string
    {
        return 'Полурослик';
    }

    public function getSpeed(): int
    {
        return 25;
    }
}