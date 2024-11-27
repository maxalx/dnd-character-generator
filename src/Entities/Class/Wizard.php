<?php
declare(strict_types=1);
namespace Dnd\CharacterGenerator\Entities\Class;

use Dnd\CharacterGenerator\Entities\Abilities\Enums\Ability;

class Wizard implements ClassInterface
{
    public function getName(): string
    {
        return 'Волшебник';
    }

    public function getMainAbility(): Ability
    {
        return Ability::Intelligence;
    }

    public function getSecondAbility(): ?Ability
    {
        return null;
    }
}