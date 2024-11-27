<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

class Dragonborn implements RaceInterface
{
    public function getName(): string
    {
        return 'Драконорожденный';
    }

    public function getSpeed(): int
    {
        return 30;
    }
}