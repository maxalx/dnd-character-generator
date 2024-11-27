<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Tiefling implements RaceInterface
{
    public function getName(): string
    {
        return 'Тифлинг';
    }

    public function getSpeed(): int
    {
        return 30;
    }
}