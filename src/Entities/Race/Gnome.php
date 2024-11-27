<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Gnome implements RaceInterface
{
    public function getName(): string
    {
        return 'Гном';
    }

    public function getSpeed(): int
    {
        return 25;
    }
}