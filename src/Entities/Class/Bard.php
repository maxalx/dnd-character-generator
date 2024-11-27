<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Bard implements ClassInterface
{
    public function getName(): string
    {
        return 'Бард';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Charisma;
    }

    public function getSecondAbility(): ?Ability
    {
        return null;
    }
}