<?php
declare(strict_types=1);

namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Cleric implements ClassInterface
{
    public function getName(): string
    {
        return 'Жрец';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Wisdom;
    }

    public function getSecondAbility(): ?Ability
    {
        return null;
    }
}