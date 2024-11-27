<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Human implements RaceInterface
{
    public function getName(): string
    {
        return 'Человек';
    }

    public function getSpeed(): int
    {
        return 30;
    }
}