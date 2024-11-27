<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Race;

interface RaceInterface
{
    public function getName(): string;
    public function getSpeed(): int;
}