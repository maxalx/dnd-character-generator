<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Rogue implements ClassInterface
{
    public function getName(): string
    {
        return 'Плут';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Strength;
    }

    public function getSecondAbility(): ?Ability
    {
        return null;
    }
}