<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Paladin implements ClassInterface
{
    public function getName(): string
    {
        return 'Паладин';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Charisma;
    }

    public function getSecondAbility(): ?Ability
    {
        return Ability::Strength;
    }
}