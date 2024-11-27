<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Monk implements ClassInterface
{
    public function getName(): string
    {
        return 'Монах';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Dexterity;
    }

    public function getSecondAbility(): ?Ability
    {
        return Ability::Wisdom;
    }
}